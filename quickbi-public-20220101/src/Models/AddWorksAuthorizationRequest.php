<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class AddWorksAuthorizationRequest extends Model
{
    /**
     * @var int
     */
    public $authPoints;

    /**
     * @var int
     */
    public $authorizeScope;

    /**
     * @var string
     */
    public $authorizedId;

    /**
     * @var string
     */
    public $expireDay;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'authPoints' => 'AuthPoints',
        'authorizeScope' => 'AuthorizeScope',
        'authorizedId' => 'AuthorizedId',
        'expireDay' => 'ExpireDay',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authPoints) {
            $res['AuthPoints'] = $this->authPoints;
        }

        if (null !== $this->authorizeScope) {
            $res['AuthorizeScope'] = $this->authorizeScope;
        }

        if (null !== $this->authorizedId) {
            $res['AuthorizedId'] = $this->authorizedId;
        }

        if (null !== $this->expireDay) {
            $res['ExpireDay'] = $this->expireDay;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['AuthPoints'])) {
            $model->authPoints = $map['AuthPoints'];
        }

        if (isset($map['AuthorizeScope'])) {
            $model->authorizeScope = $map['AuthorizeScope'];
        }

        if (isset($map['AuthorizedId'])) {
            $model->authorizedId = $map['AuthorizedId'];
        }

        if (isset($map['ExpireDay'])) {
            $model->expireDay = $map['ExpireDay'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
