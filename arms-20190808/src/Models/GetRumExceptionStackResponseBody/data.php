<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumExceptionStackResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumExceptionStackResponseBody\data\threadInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $binaryImages;

    /**
     * @var string
     */
    public $crashAddress;

    /**
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
     * @var threadInfoList[]
     */
    public $threadInfoList;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'binaryImages'   => 'BinaryImages',
        'crashAddress'   => 'CrashAddress',
        'crashReason'    => 'CrashReason',
        'lines'          => 'Lines',
        'moduleName'     => 'ModuleName',
        'threadId'       => 'ThreadId',
        'threadInfoList' => 'ThreadInfoList',
        'uuid'           => 'Uuid',
    ];

    public function validate()
    {
    }

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
                $n                     = 0;
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
