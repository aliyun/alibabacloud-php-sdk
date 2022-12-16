<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class EstablishRelationTableToBusinessRequest extends Model
{
    /**
     * @example 1000001
     *
     * @var string
     */
    public $businessId;

    /**
     * @example 2eb6f9****
     *
     * @var string
     */
    public $folderId;

    /**
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @example dw
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @example odps.dw_project.tb1
     *
     * @var string
     */
    public $tableGuid;
    protected $_name = [
        'businessId'        => 'BusinessId',
        'folderId'          => 'FolderId',
        'projectId'         => 'ProjectId',
        'projectIdentifier' => 'ProjectIdentifier',
        'tableGuid'         => 'TableGuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EstablishRelationTableToBusinessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }

        return $model;
    }
}
