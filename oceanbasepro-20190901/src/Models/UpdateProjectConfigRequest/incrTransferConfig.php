<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\UpdateProjectConfigRequest;

use AlibabaCloud\Tea\Model;

class incrTransferConfig extends Model
{
    /**
     * @example 64
     *
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
     * @example null
     *
     * @var int
     */
    public $throttleIOPS;

    /**
     * @example null
     *
     * @var int
     */
    public $throttleRps;
    protected $_name = [
        'incrSyncThreadCount' => 'IncrSyncThreadCount',
        'recordTypeWhiteList' => 'RecordTypeWhiteList',
        'supportDDLTypes'     => 'SupportDDLTypes',
        'throttleIOPS'        => 'ThrottleIOPS',
        'throttleRps'         => 'ThrottleRps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->incrSyncThreadCount) {
            $res['IncrSyncThreadCount'] = $this->incrSyncThreadCount;
        }
        if (null !== $this->recordTypeWhiteList) {
            $res['RecordTypeWhiteList'] = $this->recordTypeWhiteList;
        }
        if (null !== $this->supportDDLTypes) {
            $res['SupportDDLTypes'] = $this->supportDDLTypes;
        }
        if (null !== $this->throttleIOPS) {
            $res['ThrottleIOPS'] = $this->throttleIOPS;
        }
        if (null !== $this->throttleRps) {
            $res['ThrottleRps'] = $this->throttleRps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return incrTransferConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IncrSyncThreadCount'])) {
            $model->incrSyncThreadCount = $map['IncrSyncThreadCount'];
        }
        if (isset($map['RecordTypeWhiteList'])) {
            if (!empty($map['RecordTypeWhiteList'])) {
                $model->recordTypeWhiteList = $map['RecordTypeWhiteList'];
            }
        }
        if (isset($map['SupportDDLTypes'])) {
            if (!empty($map['SupportDDLTypes'])) {
                $model->supportDDLTypes = $map['SupportDDLTypes'];
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
