<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class EstablishRelationTableToBusinessRequest extends Model
{
    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectIdentifier;

    /**
     * @var string
     */
    public $businessId;

    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var string
     */
    public $folderId;
    protected $_name = [
        'projectId'         => 'ProjectId',
        'projectIdentifier' => 'ProjectIdentifier',
        'businessId'        => 'BusinessId',
        'tableGuid'         => 'TableGuid',
        'folderId'          => 'FolderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }

        return $model;
    }
}
