<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class CreateTimePeriodRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $timePeriodDescription;

    /**
     * @var string
     */
    public $timePeriodName;
    protected $_name = [
        'clientToken'           => 'ClientToken',
        'expression'            => 'Expression',
        'instanceId'            => 'InstanceId',
        'timePeriodDescription' => 'TimePeriodDescription',
        'timePeriodName'        => 'TimePeriodName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->timePeriodDescription) {
            $res['TimePeriodDescription'] = $this->timePeriodDescription;
        }
        if (null !== $this->timePeriodName) {
            $res['TimePeriodName'] = $this->timePeriodName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTimePeriodRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TimePeriodDescription'])) {
            $model->timePeriodDescription = $map['TimePeriodDescription'];
        }
        if (isset($map['TimePeriodName'])) {
            $model->timePeriodName = $map['TimePeriodName'];
        }

        return $model;
    }
}
