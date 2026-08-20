<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Dara\Model;

class PushTimesUsageRequest extends Model
{
    /**
     * @var bool
     */
    public $adjust;

    /**
     * @var int
     */
    public $adjustDate;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $mark;

    /**
     * @var int
     */
    public $times;
    protected $_name = [
        'adjust' => 'Adjust',
        'adjustDate' => 'AdjustDate',
        'clientToken' => 'ClientToken',
        'instanceId' => 'InstanceId',
        'mark' => 'Mark',
        'times' => 'Times',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adjust) {
            $res['Adjust'] = $this->adjust;
        }

        if (null !== $this->adjustDate) {
            $res['AdjustDate'] = $this->adjustDate;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->mark) {
            $res['Mark'] = $this->mark;
        }

        if (null !== $this->times) {
            $res['Times'] = $this->times;
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
        if (isset($map['Adjust'])) {
            $model->adjust = $map['Adjust'];
        }

        if (isset($map['AdjustDate'])) {
            $model->adjustDate = $map['AdjustDate'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Mark'])) {
            $model->mark = $map['Mark'];
        }

        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }

        return $model;
    }
}
