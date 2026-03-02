<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class BucEnterprise extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $codeupEnterpriseId;

    /**
     * @var int
     */
    public $codeupNamespaceId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'accountId' => 'accountId',
        'codeupEnterpriseId' => 'codeupEnterpriseId',
        'codeupNamespaceId' => 'codeupNamespaceId',
        'description' => 'description',
        'id' => 'id',
        'name' => 'name',
        'type' => 'type',
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

        if (null !== $this->codeupEnterpriseId) {
            $res['codeupEnterpriseId'] = $this->codeupEnterpriseId;
        }

        if (null !== $this->codeupNamespaceId) {
            $res['codeupNamespaceId'] = $this->codeupNamespaceId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['codeupEnterpriseId'])) {
            $model->codeupEnterpriseId = $map['codeupEnterpriseId'];
        }

        if (isset($map['codeupNamespaceId'])) {
            $model->codeupNamespaceId = $map['codeupNamespaceId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
