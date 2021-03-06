<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getRecordInterval() 获取录制间隔。
单位秒，默认值1800。
取值范围:300-7200。
此参数对 HLS 无效，当录制 HLS 时从推流到断流生成一个文件。
 * @method void setRecordInterval(integer $RecordInterval) 设置录制间隔。
单位秒，默认值1800。
取值范围:300-7200。
此参数对 HLS 无效，当录制 HLS 时从推流到断流生成一个文件。
 * @method integer getStorageTime() 获取录制存储时长。
单位秒，取值范围： 0-5184000。
0表示永久存储。
 * @method void setStorageTime(integer $StorageTime) 设置录制存储时长。
单位秒，取值范围： 0-5184000。
0表示永久存储。
 * @method integer getEnable() 获取是否开启当前格式录制，0 否 1是。默认值0。
 * @method void setEnable(integer $Enable) 设置是否开启当前格式录制，0 否 1是。默认值0。
 */

/**
 *录制模板参数
 */
class RecordParam extends AbstractModel
{
    /**
     * @var integer 录制间隔。
单位秒，默认值1800。
取值范围:300-7200。
此参数对 HLS 无效，当录制 HLS 时从推流到断流生成一个文件。
     */
    public $RecordInterval;

    /**
     * @var integer 录制存储时长。
单位秒，取值范围： 0-5184000。
0表示永久存储。
     */
    public $StorageTime;

    /**
     * @var integer 是否开启当前格式录制，0 否 1是。默认值0。
     */
    public $Enable;
    /**
     * @param integer $RecordInterval 录制间隔。
单位秒，默认值1800。
取值范围:300-7200。
此参数对 HLS 无效，当录制 HLS 时从推流到断流生成一个文件。
     * @param integer $StorageTime 录制存储时长。
单位秒，取值范围： 0-5184000。
0表示永久存储。
     * @param integer $Enable 是否开启当前格式录制，0 否 1是。默认值0。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RecordInterval",$param) and $param["RecordInterval"] !== null) {
            $this->RecordInterval = $param["RecordInterval"];
        }

        if (array_key_exists("StorageTime",$param) and $param["StorageTime"] !== null) {
            $this->StorageTime = $param["StorageTime"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
