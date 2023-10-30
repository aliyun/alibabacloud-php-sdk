<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\GetModelFeatureResponseBody\relations;

use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @example FeatureEntity
     *
     * @var string
     */
    public $domainType;

    /**
     * @description Domain ID。
     *
     * @example 3
     *
     * @var string
     */
    public $id;

    /**
     * @example feature_entity_1
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'domainType' => 'DomainType',
        'id'         => 'Id',
        'name'       => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
