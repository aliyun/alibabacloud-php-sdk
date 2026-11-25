<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class DataResultsValue extends Model
{
    /**
     * @var string
     */
    public $routeId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $skipReason;
    protected $_name = [
        'routeId' => 'routeId',
        'status' => 'status',
        'errorMessage' => 'errorMessage',
        'skipReason' => 'skipReason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->routeId) {
            $res['routeId'] = $this->routeId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->skipReason) {
            $res['skipReason'] = $this->skipReason;
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
        if (isset($map['routeId'])) {
            $model->routeId = $map['routeId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['skipReason'])) {
            $model->skipReason = $map['skipReason'];
        }

        return $model;
    }
}
