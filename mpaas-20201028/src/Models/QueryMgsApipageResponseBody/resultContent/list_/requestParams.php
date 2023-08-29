<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMgsApipageResponseBody\resultContent\list_;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $refType;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'apiId'        => 'ApiId',
        'appId'        => 'AppId',
        'defaultValue' => 'DefaultValue',
        'description'  => 'Description',
        'id'           => 'Id',
        'location'     => 'Location',
        'name'         => 'Name',
        'refType'      => 'RefType',
        'type'         => 'Type',
        'workspaceId'  => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->refType) {
            $res['RefType'] = $this->refType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RefType'])) {
            $model->refType = $map['RefType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
