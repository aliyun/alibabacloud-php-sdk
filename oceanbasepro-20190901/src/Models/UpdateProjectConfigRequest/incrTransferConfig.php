<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\UpdateProjectConfigRequest;

use AlibabaCloud\Dara\Model;

class incrTransferConfig extends Model
{
    /**
     * @var int
     */
    public $incrSyncThreadCount;

    /**
     * @var string[]
     */
    public $recordTypeWhiteList;

    /**
     * @var string[]
     */
    public $supportDDLTypes;

    /**
     * @var int
     */
    public $throttleIOPS;

    /**
     * @var int
     */
    public $throttleRps;
    protected $_name = [
        'incrSyncThreadCount' => 'IncrSyncThreadCount',
        'recordTypeWhiteList' => 'RecordTypeWhiteList',
        'supportDDLTypes' => 'SupportDDLTypes',
        'throttleIOPS' => 'ThrottleIOPS',
        'throttleRps' => 'ThrottleRps',
    ];

    public function validate()
    {
        if (\is_array($this->recordTypeWhiteList)) {
            Model::validateArray($this->recordTypeWhiteList);
        }
        if (\is_array($this->supportDDLTypes)) {
            Model::validateArray($this->supportDDLTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->incrSyncThreadCount) {
            $res['IncrSyncThreadCount'] = $this->incrSyncThreadCount;
        }

        if (null !== $this->recordTypeWhiteList) {
            if (\is_array($this->recordTypeWhiteList)) {
                $res['RecordTypeWhiteList'] = [];
                $n1 = 0;
                foreach ($this->recordTypeWhiteList as $item1) {
                    $res['RecordTypeWhiteList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->supportDDLTypes) {
            if (\is_array($this->supportDDLTypes)) {
                $res['SupportDDLTypes'] = [];
                $n1 = 0;
                foreach ($this->supportDDLTypes as $item1) {
                    $res['SupportDDLTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->throttleIOPS) {
            $res['ThrottleIOPS'] = $this->throttleIOPS;
        }

        if (null !== $this->throttleRps) {
            $res['ThrottleRps'] = $this->throttleRps;
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
        if (isset($map['IncrSyncThreadCount'])) {
            $model->incrSyncThreadCount = $map['IncrSyncThreadCount'];
        }

        if (isset($map['RecordTypeWhiteList'])) {
            if (!empty($map['RecordTypeWhiteList'])) {
                $model->recordTypeWhiteList = [];
                $n1 = 0;
                foreach ($map['RecordTypeWhiteList'] as $item1) {
                    $model->recordTypeWhiteList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SupportDDLTypes'])) {
            if (!empty($map['SupportDDLTypes'])) {
                $model->supportDDLTypes = [];
                $n1 = 0;
                foreach ($map['SupportDDLTypes'] as $item1) {
                    $model->supportDDLTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ThrottleIOPS'])) {
            $model->throttleIOPS = $map['ThrottleIOPS'];
        }

        if (isset($map['ThrottleRps'])) {
            $model->throttleRps = $map['ThrottleRps'];
        }

        return $model;
    }
}
