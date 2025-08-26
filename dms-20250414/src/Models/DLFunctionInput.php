<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class DLFunctionInput extends Model
{
    /**
     * @var string
     */
    public $className;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $creatorId;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $functionType;

    /**
     * @var int
     */
    public $modifierId;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var string
     */
    public $ownerType;

    /**
     * @var DLResourceUri[]
     */
    public $resourceUris;
    protected $_name = [
        'className' => 'ClassName',
        'createTime' => 'CreateTime',
        'creatorId' => 'CreatorId',
        'functionName' => 'FunctionName',
        'functionType' => 'FunctionType',
        'modifierId' => 'ModifierId',
        'ownerName' => 'OwnerName',
        'ownerType' => 'OwnerType',
        'resourceUris' => 'ResourceUris',
    ];

    public function validate()
    {
        if (\is_array($this->resourceUris)) {
            Model::validateArray($this->resourceUris);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->className) {
            $res['ClassName'] = $this->className;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }

        if (null !== $this->functionType) {
            $res['FunctionType'] = $this->functionType;
        }

        if (null !== $this->modifierId) {
            $res['ModifierId'] = $this->modifierId;
        }

        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }

        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }

        if (null !== $this->resourceUris) {
            if (\is_array($this->resourceUris)) {
                $res['ResourceUris'] = [];
                $n1 = 0;
                foreach ($this->resourceUris as $item1) {
                    $res['ResourceUris'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ClassName'])) {
            $model->className = $map['ClassName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }

        if (isset($map['FunctionType'])) {
            $model->functionType = $map['FunctionType'];
        }

        if (isset($map['ModifierId'])) {
            $model->modifierId = $map['ModifierId'];
        }

        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }

        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }

        if (isset($map['ResourceUris'])) {
            if (!empty($map['ResourceUris'])) {
                $model->resourceUris = [];
                $n1 = 0;
                foreach ($map['ResourceUris'] as $item1) {
                    $model->resourceUris[$n1] = DLResourceUri::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
