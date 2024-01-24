<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateResourceGroupRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateResourceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $computingResourceProvider;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var UserVpc
     */
    public $userVpc;
    protected $_name = [
        'computingResourceProvider' => 'ComputingResourceProvider',
        'description'               => 'Description',
        'name'                      => 'Name',
        'resourceType'              => 'ResourceType',
        'tag'                       => 'Tag',
        'userVpc'                   => 'UserVpc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->computingResourceProvider) {
            $res['ComputingResourceProvider'] = $this->computingResourceProvider;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComputingResourceProvider'])) {
            $model->computingResourceProvider = $map['ComputingResourceProvider'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserVpc'])) {
            $model->userVpc = UserVpc::fromMap($map['UserVpc']);
        }

        return $model;
    }
}
