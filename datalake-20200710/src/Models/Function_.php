<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class Function_ extends Model
{
    /**
     * @var string
     */
    public $catalogId;

    /**
     * @var string
     */
    public $className;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @example CreatedBy
     *
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $functionType;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var string
     */
    public $ownerType;

    /**
     * @var ResourceUri[]
     */
    public $resourceUri;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'catalogId'    => 'CatalogId',
        'className'    => 'ClassName',
        'createTime'   => 'CreateTime',
        'createdBy'    => 'CreatedBy',
        'databaseName' => 'DatabaseName',
        'functionName' => 'FunctionName',
        'functionType' => 'FunctionType',
        'ownerName'    => 'OwnerName',
        'ownerType'    => 'OwnerType',
        'resourceUri'  => 'ResourceUri',
        'updateTime'   => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->className) {
            $res['ClassName'] = $this->className;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->functionType) {
            $res['FunctionType'] = $this->functionType;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }
        if (null !== $this->resourceUri) {
            $res['ResourceUri'] = [];
            if (null !== $this->resourceUri && \is_array($this->resourceUri)) {
                $n = 0;
                foreach ($this->resourceUri as $item) {
                    $res['ResourceUri'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Function_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['ClassName'])) {
            $model->className = $map['ClassName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['FunctionType'])) {
            $model->functionType = $map['FunctionType'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }
        if (isset($map['ResourceUri'])) {
            if (!empty($map['ResourceUri'])) {
                $model->resourceUri = [];
                $n                  = 0;
                foreach ($map['ResourceUri'] as $item) {
                    $model->resourceUri[$n++] = null !== $item ? ResourceUri::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
