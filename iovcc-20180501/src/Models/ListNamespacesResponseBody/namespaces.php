<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListNamespacesResponseBody;

use AlibabaCloud\Tea\Model;

class namespaces extends Model
{
    /**
     * @var int
     */
    public $authType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'authType'    => 'AuthType',
        'description' => 'Description',
        'userId'      => 'UserId',
        'projectId'   => 'ProjectId',
        'gmtCreate'   => 'GmtCreate',
        'namespace'   => 'Namespace',
        'gmtModified' => 'GmtModified',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return namespaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
