<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class UpdatePartProductRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var int
     */
    public $segment;

    /**
     * @var int
     */
    public $subscribeMode;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int[]
     */
    public $cateSecondId;

    /**
     * @var int[]
     */
    public $userGroup;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'productId'     => 'ProductId',
        'name'          => 'Name',
        'detail'        => 'Detail',
        'segment'       => 'Segment',
        'subscribeMode' => 'SubscribeMode',
        'domain'        => 'Domain',
        'cateSecondId'  => 'CateSecondId',
        'userGroup'     => 'UserGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->segment) {
            $res['Segment'] = $this->segment;
        }
        if (null !== $this->subscribeMode) {
            $res['SubscribeMode'] = $this->subscribeMode;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->cateSecondId) {
            $res['CateSecondId'] = $this->cateSecondId;
        }
        if (null !== $this->userGroup) {
            $res['UserGroup'] = $this->userGroup;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePartProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['Segment'])) {
            $model->segment = $map['Segment'];
        }
        if (isset($map['SubscribeMode'])) {
            $model->subscribeMode = $map['SubscribeMode'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['CateSecondId'])) {
            if (!empty($map['CateSecondId'])) {
                $model->cateSecondId = $map['CateSecondId'];
            }
        }
        if (isset($map['UserGroup'])) {
            if (!empty($map['UserGroup'])) {
                $model->userGroup = $map['UserGroup'];
            }
        }

        return $model;
    }
}
