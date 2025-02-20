<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListOrganizationsResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $accessLevel;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $namespaceId;
    /**
     * @var string
     */
    public $organizationAlias;
    /**
     * @var string
     */
    public $organizationId;
    /**
     * @var string
     */
    public $organizationName;
    /**
     * @var string
     */
    public $organizationRole;
    protected $_name = [
        'accessLevel'       => 'accessLevel',
        'id'                => 'id',
        'namespaceId'       => 'namespaceId',
        'organizationAlias' => 'organizationAlias',
        'organizationId'    => 'organizationId',
        'organizationName'  => 'organizationName',
        'organizationRole'  => 'organizationRole',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessLevel) {
            $res['accessLevel'] = $this->accessLevel;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->namespaceId) {
            $res['namespaceId'] = $this->namespaceId;
        }

        if (null !== $this->organizationAlias) {
            $res['organizationAlias'] = $this->organizationAlias;
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        if (null !== $this->organizationName) {
            $res['organizationName'] = $this->organizationName;
        }

        if (null !== $this->organizationRole) {
            $res['organizationRole'] = $this->organizationRole;
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
        if (isset($map['accessLevel'])) {
            $model->accessLevel = $map['accessLevel'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['namespaceId'])) {
            $model->namespaceId = $map['namespaceId'];
        }

        if (isset($map['organizationAlias'])) {
            $model->organizationAlias = $map['organizationAlias'];
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        if (isset($map['organizationName'])) {
            $model->organizationName = $map['organizationName'];
        }

        if (isset($map['organizationRole'])) {
            $model->organizationRole = $map['organizationRole'];
        }

        return $model;
    }
}
