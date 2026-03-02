<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ListPermissionResourceForFrontRequest extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $operatorId;

    /**
     * @var string
     */
    public $operatorType;

    /**
     * @var string
     */
    public $queryType;

    /**
     * @var string
     */
    public $resourcePrefix;
    protected $_name = [
        'action' => 'action',
        'enterpriseId' => 'enterpriseId',
        'operatorId' => 'operatorId',
        'operatorType' => 'operatorType',
        'queryType' => 'queryType',
        'resourcePrefix' => 'resourcePrefix',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->enterpriseId) {
            $res['enterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->operatorId) {
            $res['operatorId'] = $this->operatorId;
        }

        if (null !== $this->operatorType) {
            $res['operatorType'] = $this->operatorType;
        }

        if (null !== $this->queryType) {
            $res['queryType'] = $this->queryType;
        }

        if (null !== $this->resourcePrefix) {
            $res['resourcePrefix'] = $this->resourcePrefix;
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
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        if (isset($map['enterpriseId'])) {
            $model->enterpriseId = $map['enterpriseId'];
        }

        if (isset($map['operatorId'])) {
            $model->operatorId = $map['operatorId'];
        }

        if (isset($map['operatorType'])) {
            $model->operatorType = $map['operatorType'];
        }

        if (isset($map['queryType'])) {
            $model->queryType = $map['queryType'];
        }

        if (isset($map['resourcePrefix'])) {
            $model->resourcePrefix = $map['resourcePrefix'];
        }

        return $model;
    }
}
