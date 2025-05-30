<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceProvisionsResponseBody\serviceProvisions\roleProvision\roles;

use AlibabaCloud\Dara\Model;

class apiForCreation extends Model
{
    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $apiProductId;

    /**
     * @var string
     */
    public $apiType;

    /**
     * @var mixed[]
     */
    public $parameters;
    protected $_name = [
        'apiName' => 'ApiName',
        'apiProductId' => 'ApiProductId',
        'apiType' => 'ApiType',
        'parameters' => 'parameters',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }

        if (null !== $this->apiProductId) {
            $res['ApiProductId'] = $this->apiProductId;
        }

        if (null !== $this->apiType) {
            $res['ApiType'] = $this->apiType;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['parameters'][$key1] = $value1;
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
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }

        if (isset($map['ApiProductId'])) {
            $model->apiProductId = $map['ApiProductId'];
        }

        if (isset($map['ApiType'])) {
            $model->apiType = $map['ApiType'];
        }

        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                foreach ($map['parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
