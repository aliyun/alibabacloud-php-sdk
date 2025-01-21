<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumExceptionStackResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumExceptionStackResponseBody\data\threadInfoList;

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
     * @var string[]
     */
    public $lines;
    /**
     * @var string
     */
    public $moduleName;
    /**
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
        if (\is_array($this->lines)) {
            Model::validateArray($this->lines);
        }
        if (\is_array($this->threadInfoList)) {
            Model::validateArray($this->threadInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->lines)) {
                $res['Lines'] = [];
                $n1           = 0;
                foreach ($this->lines as $item1) {
                    $res['Lines'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }

        if (null !== $this->threadId) {
            $res['ThreadId'] = $this->threadId;
        }

        if (null !== $this->threadInfoList) {
            if (\is_array($this->threadInfoList)) {
                $res['ThreadInfoList'] = [];
                $n1                    = 0;
                foreach ($this->threadInfoList as $item1) {
                    $res['ThreadInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->lines = [];
                $n1           = 0;
                foreach ($map['Lines'] as $item1) {
                    $model->lines[$n1++] = $item1;
                }
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
                $n1                    = 0;
                foreach ($map['ThreadInfoList'] as $item1) {
                    $model->threadInfoList[$n1++] = threadInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
