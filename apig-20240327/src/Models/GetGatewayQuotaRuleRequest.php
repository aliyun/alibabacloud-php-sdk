<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class GetGatewayQuotaRuleRequest extends Model
{
    /**
     * @var string
     */
    public $consumerPageNumber;

    /**
     * @var string
     */
    public $consumerPageSize;

    /**
     * @var bool
     */
    public $withConsumers;
    protected $_name = [
        'consumerPageNumber' => 'consumerPageNumber',
        'consumerPageSize' => 'consumerPageSize',
        'withConsumers' => 'withConsumers',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerPageNumber) {
            $res['consumerPageNumber'] = $this->consumerPageNumber;
        }

        if (null !== $this->consumerPageSize) {
            $res['consumerPageSize'] = $this->consumerPageSize;
        }

        if (null !== $this->withConsumers) {
            $res['withConsumers'] = $this->withConsumers;
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
        if (isset($map['consumerPageNumber'])) {
            $model->consumerPageNumber = $map['consumerPageNumber'];
        }

        if (isset($map['consumerPageSize'])) {
            $model->consumerPageSize = $map['consumerPageSize'];
        }

        if (isset($map['withConsumers'])) {
            $model->withConsumers = $map['withConsumers'];
        }

        return $model;
    }
}
