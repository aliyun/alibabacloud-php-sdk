<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DeleteStackInstancesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stackGroupName;

    /**
     * @var string
     */
    public $accountIdsShrink;

    /**
     * @var string
     */
    public $regionIdsShrink;

    /**
     * @var bool
     */
    public $retainStacks;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $operationDescription;

    /**
     * @var string
     */
    public $operationPreferencesShrink;
    protected $_name = [
        'regionId'                   => 'RegionId',
        'stackGroupName'             => 'StackGroupName',
        'accountIdsShrink'           => 'AccountIds',
        'regionIdsShrink'            => 'RegionIds',
        'retainStacks'               => 'RetainStacks',
        'clientToken'                => 'ClientToken',
        'operationDescription'       => 'OperationDescription',
        'operationPreferencesShrink' => 'OperationPreferences',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->accountIdsShrink) {
            $res['AccountIds'] = $this->accountIdsShrink;
        }
        if (null !== $this->regionIdsShrink) {
            $res['RegionIds'] = $this->regionIdsShrink;
        }
        if (null !== $this->retainStacks) {
            $res['RetainStacks'] = $this->retainStacks;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->operationDescription) {
            $res['OperationDescription'] = $this->operationDescription;
        }
        if (null !== $this->operationPreferencesShrink) {
            $res['OperationPreferences'] = $this->operationPreferencesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteStackInstancesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['AccountIds'])) {
            $model->accountIdsShrink = $map['AccountIds'];
        }
        if (isset($map['RegionIds'])) {
            $model->regionIdsShrink = $map['RegionIds'];
        }
        if (isset($map['RetainStacks'])) {
            $model->retainStacks = $map['RetainStacks'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OperationDescription'])) {
            $model->operationDescription = $map['OperationDescription'];
        }
        if (isset($map['OperationPreferences'])) {
            $model->operationPreferencesShrink = $map['OperationPreferences'];
        }

        return $model;
    }
}
