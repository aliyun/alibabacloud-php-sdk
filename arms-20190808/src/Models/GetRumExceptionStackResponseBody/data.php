<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumExceptionStackResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumExceptionStackResponseBody\data\threadInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name and UUID of the symbol table required for parsing the exception stack. This parameter is exposed during the parsing of PC errors.
     *
     * @example "04B5B216682E40BF9BBE9698E3F98CAA0,libcurl.4.dylib;7878DB3CF21A3C13A203B7E3B0FA66250,libalibabacloud_rum.dylib;0F9F96FE6B1C3253A33AC9E4A0C2A3860,libsystem_kernel.dylib;3DF3256F466E37BCB995A5A9956E14150,libsystem_pthread.dylib;000000000000000000000000000000000,Security;EA4B83A319EB3E15B22CDF035DBD49250,alibabacloud_rum_example;710BB12EEEC744BAB41D1849CA3AD8021,LTSDK.pdb;EE330BA9C49E4730AA15A2B7C0BB2CAE1,JBLive.pdb"
     *
     * @var string
     */
    public $binaryImages;

    /**
     * @description The crash address. This parameter is exposed during the parsing of PC errors.
     *
     * @example 0x1
     *
     * @var string
     */
    public $crashAddress;

    /**
     * @description The cause of the exception. This parameter is exposed during the parsing of PC errors.
     *
     * @example EXC_BAD_ACCESS / KERN_INVALID_ADDRESS
     *
     * @var string
     */
    public $crashReason;

    /**
     * @description The list of stacks.
     *
     * @var string[]
     */
    public $lines;

    /**
     * @description The name of the crash parsing module. This parameter is exposed during the parsing of PC errors.
     *
     * @example alibabacloud_rum_example
     *
     * @var string
     */
    public $moduleName;

    /**
     * @description The thread ID.
     *
     * @example 16643
     *
     * @var string
     */
    public $threadId;

    /**
     * @description The thread stack information captured during PC crashes.
     *
     * @var threadInfoList[]
     */
    public $threadInfoList;

    /**
     * @description The UUID of the symbol table required for parsing the stack. This parameter is exposed during the parsing of PC errors.
     *
     * @example 9032259CEB9130E780C6DE8FDECCD7990
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'binaryImages' => 'BinaryImages',
        'crashAddress' => 'CrashAddress',
        'crashReason' => 'CrashReason',
        'lines' => 'Lines',
        'moduleName' => 'ModuleName',
        'threadId' => 'ThreadId',
        'threadInfoList' => 'ThreadInfoList',
        'uuid' => 'Uuid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->binaryImages) {
            $res['BinaryImages'] = $this->binaryImages;
        }
        if (null !== $this->crashAddress) {
            $res['CrashAddress'] = $this->crashAddress;
        }
        if (null !== $this->crashReason) {
            $res['CrashReason'] = $this->crashReason;
        }
        if (null !== $this->lines) {
            $res['Lines'] = $this->lines;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->threadId) {
            $res['ThreadId'] = $this->threadId;
        }
        if (null !== $this->threadInfoList) {
            $res['ThreadInfoList'] = [];
            if (null !== $this->threadInfoList && \is_array($this->threadInfoList)) {
                $n = 0;
                foreach ($this->threadInfoList as $item) {
                    $res['ThreadInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BinaryImages'])) {
            $model->binaryImages = $map['BinaryImages'];
        }
        if (isset($map['CrashAddress'])) {
            $model->crashAddress = $map['CrashAddress'];
        }
        if (isset($map['CrashReason'])) {
            $model->crashReason = $map['CrashReason'];
        }
        if (isset($map['Lines'])) {
            if (!empty($map['Lines'])) {
                $model->lines = $map['Lines'];
            }
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['ThreadId'])) {
            $model->threadId = $map['ThreadId'];
        }
        if (isset($map['ThreadInfoList'])) {
            if (!empty($map['ThreadInfoList'])) {
                $model->threadInfoList = [];
                $n = 0;
                foreach ($map['ThreadInfoList'] as $item) {
                    $model->threadInfoList[$n++] = null !== $item ? threadInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
