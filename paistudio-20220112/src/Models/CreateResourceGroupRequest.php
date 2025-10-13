<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateResourceGroupRequest\tag;

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

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'computingResourceProvider' => 'ComputingResourceProvider',
        'description' => 'Description',
        'name' => 'Name',
        'resourceType' => 'ResourceType',
        'tag' => 'Tag',
        'userVpc' => 'UserVpc',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (null !== $this->userVpc) {
            $this->userVpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toArray($noStream) : $this->userVpc;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UserVpc'])) {
            $model->userVpc = UserVpc::fromMap($map['UserVpc']);
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
