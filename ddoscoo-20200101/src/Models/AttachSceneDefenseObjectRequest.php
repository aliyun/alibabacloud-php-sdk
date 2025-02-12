<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class AttachSceneDefenseObjectRequest extends Model
{
    /**
     * @var string
     */
    public $objectType;
    /**
     * @var string
     */
    public $objects;
    /**
     * @var string
     */
    public $policyId;
    protected $_name = [
        'objectType' => 'ObjectType',
        'objects'    => 'Objects',
        'policyId'   => 'PolicyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }

        if (null !== $this->objects) {
            $res['Objects'] = $this->objects;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
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
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        if (isset($map['Objects'])) {
            $model->objects = $map['Objects'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        return $model;
    }
}
