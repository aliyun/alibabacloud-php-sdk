<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelService\V20220614\Models\ListRechargeBillsResponseBody;

use AlibabaCloud\Dara\Model;

class instanseInfos extends Model
{
    /**
     * @var int
     */
    public $currTimes;

    /**
     * @var string
     */
    public $gmtEndTime;

    /**
     * @var int
     */
    public $initTimes;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'currTimes' => 'CurrTimes',
        'gmtEndTime' => 'GmtEndTime',
        'initTimes' => 'InitTimes',
        'instanceId' => 'InstanceId',
        'source' => 'Source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currTimes) {
            $res['CurrTimes'] = $this->currTimes;
        }

        if (null !== $this->gmtEndTime) {
            $res['GmtEndTime'] = $this->gmtEndTime;
        }

        if (null !== $this->initTimes) {
            $res['InitTimes'] = $this->initTimes;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['CurrTimes'])) {
            $model->currTimes = $map['CurrTimes'];
        }

        if (isset($map['GmtEndTime'])) {
            $model->gmtEndTime = $map['GmtEndTime'];
        }

        if (isset($map['InitTimes'])) {
            $model->initTimes = $map['InitTimes'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
