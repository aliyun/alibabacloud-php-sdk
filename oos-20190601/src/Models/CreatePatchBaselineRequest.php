<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class CreatePatchBaselineRequest extends Model
{
    /**
     * @var string
     */
    public $approvalRules;

    /**
     * @var string
     */
    public $clientToken;

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
    public $operationSystem;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'approvalRules'   => 'ApprovalRules',
        'clientToken'     => 'ClientToken',
        'description'     => 'Description',
        'name'            => 'Name',
        'operationSystem' => 'OperationSystem',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvalRules) {
            $res['ApprovalRules'] = $this->approvalRules;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operationSystem) {
            $res['OperationSystem'] = $this->operationSystem;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePatchBaselineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovalRules'])) {
            $model->approvalRules = $map['ApprovalRules'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OperationSystem'])) {
            $model->operationSystem = $map['OperationSystem'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
