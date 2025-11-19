<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models;

use AlibabaCloud\Dara\Model;

class DescribeCorePackageListRequest extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var bool
     */
    public $queryDeductionInstances;

    /**
     * @var string
     */
    public $queryScenario;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'queryDeductionInstances' => 'QueryDeductionInstances',
        'queryScenario' => 'QueryScenario',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->queryDeductionInstances) {
            $res['QueryDeductionInstances'] = $this->queryDeductionInstances;
        }

        if (null !== $this->queryScenario) {
            $res['QueryScenario'] = $this->queryScenario;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['QueryDeductionInstances'])) {
            $model->queryDeductionInstances = $map['QueryDeductionInstances'];
        }

        if (isset($map['QueryScenario'])) {
            $model->queryScenario = $map['QueryScenario'];
        }

        return $model;
    }
}
