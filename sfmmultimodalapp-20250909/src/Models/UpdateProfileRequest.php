<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateProfileRequest\attributesOperations;

class UpdateProfileRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var attributesOperations[]
     */
    public $attributesOperations;

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
    public $userDefinedId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId' => 'AppId',
        'attributesOperations' => 'AttributesOperations',
        'description' => 'Description',
        'name' => 'Name',
        'userDefinedId' => 'UserDefinedId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->attributesOperations)) {
            Model::validateArray($this->attributesOperations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->attributesOperations) {
            if (\is_array($this->attributesOperations)) {
                $res['AttributesOperations'] = [];
                $n1 = 0;
                foreach ($this->attributesOperations as $item1) {
                    $res['AttributesOperations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->userDefinedId) {
            $res['UserDefinedId'] = $this->userDefinedId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AttributesOperations'])) {
            if (!empty($map['AttributesOperations'])) {
                $model->attributesOperations = [];
                $n1 = 0;
                foreach ($map['AttributesOperations'] as $item1) {
                    $model->attributesOperations[$n1] = attributesOperations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['UserDefinedId'])) {
            $model->userDefinedId = $map['UserDefinedId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
