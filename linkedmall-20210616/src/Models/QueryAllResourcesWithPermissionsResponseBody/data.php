<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20210616\Models\QueryAllResourcesWithPermissionsResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20210616\Models\QueryAllResourcesWithPermissionsResponseBody\data\permissionOfResourceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var permissionOfResourceList[]
     */
    public $permissionOfResourceList;

    /**
     * @var mixed[][]
     */
    public $resourceAttributeList;
    protected $_name = [
        'type'                     => 'Type',
        'description'              => 'Description',
        'code'                     => 'Code',
        'resourceId'               => 'ResourceId',
        'name'                     => 'Name',
        'content'                  => 'Content',
        'creator'                  => 'Creator',
        'permissionOfResourceList' => 'PermissionOfResourceList',
        'resourceAttributeList'    => 'ResourceAttributeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->permissionOfResourceList) {
            $res['PermissionOfResourceList'] = [];
            if (null !== $this->permissionOfResourceList && \is_array($this->permissionOfResourceList)) {
                $n = 0;
                foreach ($this->permissionOfResourceList as $item) {
                    $res['PermissionOfResourceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceAttributeList) {
            $res['ResourceAttributeList'] = $this->resourceAttributeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['PermissionOfResourceList'])) {
            if (!empty($map['PermissionOfResourceList'])) {
                $model->permissionOfResourceList = [];
                $n                               = 0;
                foreach ($map['PermissionOfResourceList'] as $item) {
                    $model->permissionOfResourceList[$n++] = null !== $item ? permissionOfResourceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceAttributeList'])) {
            if (!empty($map['ResourceAttributeList'])) {
                $model->resourceAttributeList = $map['ResourceAttributeList'];
            }
        }

        return $model;
    }
}
