<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class QueryQuotaRequest extends Model
{
    /**
     * @var string
     */
    public $akProven;

    /**
     * @var bool
     */
    public $mock;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'akProven' => 'AkProven',
        'mock' => 'mock',
        'region' => 'region',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->akProven) {
            $res['AkProven'] = $this->akProven;
        }

        if (null !== $this->mock) {
            $res['mock'] = $this->mock;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['AkProven'])) {
            $model->akProven = $map['AkProven'];
        }

        if (isset($map['mock'])) {
            $model->mock = $map['mock'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
