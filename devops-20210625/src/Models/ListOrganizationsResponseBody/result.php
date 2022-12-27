<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListOrganizationsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 60
     *
     * @var int
     */
    public $accessLevel;

    /**
     * @example 5240
     *
     * @var int
     */
    public $id;

    /**
     * @example 60de7a6852743a5162b5f957
     *
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $organizationName;

    /**
     * @example ORG_ADMIN
     *
     * @var string
     */
    public $organizationRole;
    protected $_name = [
        'accessLevel'      => 'accessLevel',
        'id'               => 'id',
        'organizationId'   => 'organizationId',
        'organizationName' => 'organizationName',
        'organizationRole' => 'organizationRole',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLevel) {
            $res['accessLevel'] = $this->accessLevel;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
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

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessLevel'])) {
            $model->accessLevel = $map['accessLevel'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
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
