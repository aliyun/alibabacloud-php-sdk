<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryAuditLogResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 2024-04-16 13:17:39
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example wukaibis
     *
     * @var string
     */
    public $operatorAccountName;

    /**
     * @example buc_344078
     *
     * @var string
     */
    public $operatorName;

    /**
     * @example CREATE
     *
     * @var string
     */
    public $operatorType;

    /**
     * @var string
     */
    public $targetName;

    /**
     * @example USER
     *
     * @var string
     */
    public $targetType;

    /**
     * @example 87c6b145-090c-43e1-9426-8f93be23****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'gmtCreate'           => 'GmtCreate',
        'operatorAccountName' => 'OperatorAccountName',
        'operatorName'        => 'OperatorName',
        'operatorType'        => 'OperatorType',
        'targetName'          => 'TargetName',
        'targetType'          => 'TargetType',
        'workspaceId'         => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->operatorAccountName) {
            $res['OperatorAccountName'] = $this->operatorAccountName;
        }
        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }
        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['OperatorAccountName'])) {
            $model->operatorAccountName = $map['OperatorAccountName'];
        }
        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }
        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
