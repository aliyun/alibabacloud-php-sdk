<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ListEnvInfosRequest extends Model
{
    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $env;

    /**
     * @var int
     */
    public $pbcId;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'enterpriseId' => 'enterpriseId',
        'env' => 'env',
        'pbcId' => 'pbcId',
        'region' => 'region',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enterpriseId) {
            $res['enterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->pbcId) {
            $res['pbcId'] = $this->pbcId;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
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
        if (isset($map['enterpriseId'])) {
            $model->enterpriseId = $map['enterpriseId'];
        }

        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['pbcId'])) {
            $model->pbcId = $map['pbcId'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        return $model;
    }
}
