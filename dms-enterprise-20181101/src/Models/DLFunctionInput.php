<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
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
            $res['ResourceUris'] = [];
            if (null !== $this->resourceUris && \is_array($this->resourceUris)) {
                $n = 0;
                foreach ($this->resourceUris as $item) {
                    $res['ResourceUris'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DLFunctionInput
     */
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
                $n = 0;
                foreach ($map['ResourceUris'] as $item) {
                    $model->resourceUris[$n++] = null !== $item ? DLResourceUri::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
