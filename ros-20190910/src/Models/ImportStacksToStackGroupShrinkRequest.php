<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ImportStacksToStackGroupShrinkRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example Import ops stacks to stack group
     *
     * @var string
     */
    public $operationDescription;

    /**
     * @example {"FailureToleranceCount": 1,"MaxConcurrentCount": 2}
     *
     * @var string
     */
    public $operationPreferencesShrink;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceDirectoryFolderIdsShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $stackArnsShrink;

    /**
     * @description This parameter is required.
     *
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;
    protected $_name = [
        'clientToken'                      => 'ClientToken',
        'operationDescription'             => 'OperationDescription',
        'operationPreferencesShrink'       => 'OperationPreferences',
        'regionId'                         => 'RegionId',
        'resourceDirectoryFolderIdsShrink' => 'ResourceDirectoryFolderIds',
        'stackArnsShrink'                  => 'StackArns',
        'stackGroupName'                   => 'StackGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->operationDescription) {
            $res['OperationDescription'] = $this->operationDescription;
        }
        if (null !== $this->operationPreferencesShrink) {
            $res['OperationPreferences'] = $this->operationPreferencesShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceDirectoryFolderIdsShrink) {
            $res['ResourceDirectoryFolderIds'] = $this->resourceDirectoryFolderIdsShrink;
        }
        if (null !== $this->stackArnsShrink) {
            $res['StackArns'] = $this->stackArnsShrink;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportStacksToStackGroupShrinkRequest
     */
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
            $model->operationPreferencesShrink = $map['OperationPreferences'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceDirectoryFolderIds'])) {
            $model->resourceDirectoryFolderIdsShrink = $map['ResourceDirectoryFolderIds'];
        }
        if (isset($map['StackArns'])) {
            $model->stackArnsShrink = $map['StackArns'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }

        return $model;
    }
}
