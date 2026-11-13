<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetDirectSupplyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDirectSupplyResponseBody\data\candidateModels;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDirectSupplyResponseBody\data\catalogError;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDirectSupplyResponseBody\data\models;

class data extends Model
{
    /**
     * @var candidateModels[]
     */
    public $candidateModels;

    /**
     * @var catalogError
     */
    public $catalogError;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var models[]
     */
    public $models;
    protected $_name = [
        'candidateModels' => 'candidateModels',
        'catalogError' => 'catalogError',
        'enabled' => 'enabled',
        'gatewayId' => 'gatewayId',
        'models' => 'models',
    ];

    public function validate()
    {
        if (\is_array($this->candidateModels)) {
            Model::validateArray($this->candidateModels);
        }
        if (null !== $this->catalogError) {
            $this->catalogError->validate();
        }
        if (\is_array($this->models)) {
            Model::validateArray($this->models);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->candidateModels) {
            if (\is_array($this->candidateModels)) {
                $res['candidateModels'] = [];
                $n1 = 0;
                foreach ($this->candidateModels as $item1) {
                    $res['candidateModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->catalogError) {
            $res['catalogError'] = null !== $this->catalogError ? $this->catalogError->toArray($noStream) : $this->catalogError;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->models) {
            if (\is_array($this->models)) {
                $res['models'] = [];
                $n1 = 0;
                foreach ($this->models as $item1) {
                    $res['models'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['candidateModels'])) {
            if (!empty($map['candidateModels'])) {
                $model->candidateModels = [];
                $n1 = 0;
                foreach ($map['candidateModels'] as $item1) {
                    $model->candidateModels[$n1] = candidateModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['catalogError'])) {
            $model->catalogError = catalogError::fromMap($map['catalogError']);
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['models'])) {
            if (!empty($map['models'])) {
                $model->models = [];
                $n1 = 0;
                foreach ($map['models'] as $item1) {
                    $model->models[$n1] = models::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
