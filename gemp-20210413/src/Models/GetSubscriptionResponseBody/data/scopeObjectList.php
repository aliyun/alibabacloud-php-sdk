<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetSubscriptionResponseBody\data;

use AlibabaCloud\Tea\Model;

class scopeObjectList extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $isValid;

    /**
     * @example SERVICE
     *
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $scopeObject;

    /**
     * @example 10
     *
     * @var int
     */
    public $scopeObjectId;
    protected $_name = [
        'id'            => 'id',
        'isValid'       => 'isValid',
        'scope'         => 'scope',
        'scopeObject'   => 'scopeObject',
        'scopeObjectId' => 'scopeObjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->isValid) {
            $res['isValid'] = $this->isValid;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->scopeObject) {
            $res['scopeObject'] = $this->scopeObject;
        }
        if (null !== $this->scopeObjectId) {
            $res['scopeObjectId'] = $this->scopeObjectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scopeObjectList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['isValid'])) {
            $model->isValid = $map['isValid'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['scopeObject'])) {
            $model->scopeObject = $map['scopeObject'];
        }
        if (isset($map['scopeObjectId'])) {
            $model->scopeObjectId = $map['scopeObjectId'];
        }

        return $model;
    }
}
