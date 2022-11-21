<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetCodeupOrganizationResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $userRole;
    protected $_name = [
        'createdAt'      => 'createdAt',
        'id'             => 'id',
        'namespaceId'    => 'namespaceId',
        'organizationId' => 'organizationId',
        'path'           => 'path',
        'updatedAt'      => 'updatedAt',
        'userRole'       => 'userRole',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->namespaceId) {
            $res['namespaceId'] = $this->namespaceId;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }
        if (null !== $this->userRole) {
            $res['userRole'] = $this->userRole;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['namespaceId'])) {
            $model->namespaceId = $map['namespaceId'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }
        if (isset($map['userRole'])) {
            $model->userRole = $map['userRole'];
        }

        return $model;
    }
}
