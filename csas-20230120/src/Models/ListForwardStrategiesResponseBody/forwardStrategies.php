<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListForwardStrategiesResponseBody;

use AlibabaCloud\Dara\Model;

class forwardStrategies extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destinationId;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var string
     */
    public $forwardId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'description' => 'Description',
        'destinationId' => 'DestinationId',
        'destinationType' => 'DestinationType',
        'forwardId' => 'ForwardId',
        'name' => 'Name',
        'priority' => 'Priority',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->destinationId) {
            $res['DestinationId'] = $this->destinationId;
        }

        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }

        if (null !== $this->forwardId) {
            $res['ForwardId'] = $this->forwardId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DestinationId'])) {
            $model->destinationId = $map['DestinationId'];
        }

        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }

        if (isset($map['ForwardId'])) {
            $model->forwardId = $map['ForwardId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
