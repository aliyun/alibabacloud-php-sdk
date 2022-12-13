<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListSubscriptionsRequest extends Model
{
    /**
     * @example 601FA6A2-AC5C-4B59-BE11-378FTOKENA11
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $notFilterScopeObjectDeleted;

    /**
     * @example test
     *
     * @var string
     */
    public $notifyObject;

    /**
     * @example SERVICE
     *
     * @var string
     */
    public $notifyObjectType;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example SERVICE
     *
     * @var string
     */
    public $scope;

    /**
     * @example TestName
     *
     * @var string
     */
    public $scopeObject;

    /**
     * @example newTitle
     *
     * @var string
     */
    public $subscriptionTitle;
    protected $_name = [
        'clientToken'                 => 'clientToken',
        'notFilterScopeObjectDeleted' => 'notFilterScopeObjectDeleted',
        'notifyObject'                => 'notifyObject',
        'notifyObjectType'            => 'notifyObjectType',
        'pageNumber'                  => 'pageNumber',
        'pageSize'                    => 'pageSize',
        'scope'                       => 'scope',
        'scopeObject'                 => 'scopeObject',
        'subscriptionTitle'           => 'subscriptionTitle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->notFilterScopeObjectDeleted) {
            $res['notFilterScopeObjectDeleted'] = $this->notFilterScopeObjectDeleted;
        }
        if (null !== $this->notifyObject) {
            $res['notifyObject'] = $this->notifyObject;
        }
        if (null !== $this->notifyObjectType) {
            $res['notifyObjectType'] = $this->notifyObjectType;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->scopeObject) {
            $res['scopeObject'] = $this->scopeObject;
        }
        if (null !== $this->subscriptionTitle) {
            $res['subscriptionTitle'] = $this->subscriptionTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSubscriptionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['notFilterScopeObjectDeleted'])) {
            $model->notFilterScopeObjectDeleted = $map['notFilterScopeObjectDeleted'];
        }
        if (isset($map['notifyObject'])) {
            $model->notifyObject = $map['notifyObject'];
        }
        if (isset($map['notifyObjectType'])) {
            $model->notifyObjectType = $map['notifyObjectType'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['scopeObject'])) {
            $model->scopeObject = $map['scopeObject'];
        }
        if (isset($map['subscriptionTitle'])) {
            $model->subscriptionTitle = $map['subscriptionTitle'];
        }

        return $model;
    }
}
