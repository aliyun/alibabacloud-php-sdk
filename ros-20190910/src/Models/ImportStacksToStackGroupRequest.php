<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class ImportStacksToStackGroupRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $operationDescription;
    /**
     * @var mixed[]
     */
    public $operationPreferences;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string[]
     */
    public $resourceDirectoryFolderIds;
    /**
     * @var string[]
     */
    public $stackArns;
    /**
     * @var string
     */
    public $stackGroupName;
    protected $_name = [
        'clientToken'                => 'ClientToken',
        'operationDescription'       => 'OperationDescription',
        'operationPreferences'       => 'OperationPreferences',
        'regionId'                   => 'RegionId',
        'resourceDirectoryFolderIds' => 'ResourceDirectoryFolderIds',
        'stackArns'                  => 'StackArns',
        'stackGroupName'             => 'StackGroupName',
    ];

    public function validate()
    {
        if (\is_array($this->operationPreferences)) {
            Model::validateArray($this->operationPreferences);
        }
        if (\is_array($this->resourceDirectoryFolderIds)) {
            Model::validateArray($this->resourceDirectoryFolderIds);
        }
        if (\is_array($this->stackArns)) {
            Model::validateArray($this->stackArns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->operationDescription) {
            $res['OperationDescription'] = $this->operationDescription;
        }

        if (null !== $this->operationPreferences) {
            if (\is_array($this->operationPreferences)) {
                $res['OperationPreferences'] = [];
                foreach ($this->operationPreferences as $key1 => $value1) {
                    $res['OperationPreferences'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceDirectoryFolderIds) {
            if (\is_array($this->resourceDirectoryFolderIds)) {
                $res['ResourceDirectoryFolderIds'] = [];
                $n1                                = 0;
                foreach ($this->resourceDirectoryFolderIds as $item1) {
                    $res['ResourceDirectoryFolderIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->stackArns) {
            if (\is_array($this->stackArns)) {
                $res['StackArns'] = [];
                $n1               = 0;
                foreach ($this->stackArns as $item1) {
                    $res['StackArns'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['OperationDescription'])) {
            $model->operationDescription = $map['OperationDescription'];
        }

        if (isset($map['OperationPreferences'])) {
            if (!empty($map['OperationPreferences'])) {
                $model->operationPreferences = [];
                foreach ($map['OperationPreferences'] as $key1 => $value1) {
                    $model->operationPreferences[$key1] = $value1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceDirectoryFolderIds'])) {
            if (!empty($map['ResourceDirectoryFolderIds'])) {
                $model->resourceDirectoryFolderIds = [];
                $n1                                = 0;
                foreach ($map['ResourceDirectoryFolderIds'] as $item1) {
                    $model->resourceDirectoryFolderIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['StackArns'])) {
            if (!empty($map['StackArns'])) {
                $model->stackArns = [];
                $n1               = 0;
                foreach ($map['StackArns'] as $item1) {
                    $model->stackArns[$n1++] = $item1;
                }
            }
        }

        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }

        return $model;
    }
}
