<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DetachSceneDefenseObjectRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $objects;
    protected $_name = [
        'sourceIp'   => 'SourceIp',
        'policyId'   => 'PolicyId',
        'objectType' => 'ObjectType',
        'objects'    => 'Objects',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->objects) {
            $res['Objects'] = $this->objects;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachSceneDefenseObjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['Objects'])) {
            $model->objects = $map['Objects'];
        }

        return $model;
    }
}
