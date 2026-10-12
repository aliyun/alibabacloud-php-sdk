<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetApiPathFieldConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetApiPathFieldConfigResponseBody\data\pathConfigs;

class data extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var pathConfigs[]
     */
    public $pathConfigs;
    protected $_name = [
        'apiId' => 'apiId',
        'gatewayId' => 'gatewayId',
        'pathConfigs' => 'pathConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->pathConfigs)) {
            Model::validateArray($this->pathConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['apiId'] = $this->apiId;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->pathConfigs) {
            if (\is_array($this->pathConfigs)) {
                $res['pathConfigs'] = [];
                $n1 = 0;
                foreach ($this->pathConfigs as $item1) {
                    $res['pathConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['apiId'])) {
            $model->apiId = $map['apiId'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['pathConfigs'])) {
            if (!empty($map['pathConfigs'])) {
                $model->pathConfigs = [];
                $n1 = 0;
                foreach ($map['pathConfigs'] as $item1) {
                    $model->pathConfigs[$n1] = pathConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
