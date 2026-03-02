<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PdpServiceGroupCreateCmd extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $serviceId;
    protected $_name = [
        'accountId' => 'accountId',
        'alias' => 'alias',
        'description' => 'description',
        'env' => 'env',
        'groupType' => 'groupType',
        'name' => 'name',
        'serviceId' => 'serviceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->groupType) {
            $res['groupType'] = $this->groupType;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['groupType'])) {
            $model->groupType = $map['groupType'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        return $model;
    }
}
