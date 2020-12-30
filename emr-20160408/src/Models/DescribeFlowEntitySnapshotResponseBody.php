<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeFlowEntitySnapshotResponseBody extends Model
{
    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var bool
     */
    public $active;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $revision;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $entityGroupId;

    /**
     * @var string
     */
    public $committerId;
    protected $_name = [
        'entityId'      => 'EntityId',
        'entityType'    => 'EntityType',
        'active'        => 'Active',
        'gmtCreate'     => 'GmtCreate',
        'requestId'     => 'RequestId',
        'message'       => 'Message',
        'revision'      => 'Revision',
        'userId'        => 'UserId',
        'data'          => 'Data',
        'entityGroupId' => 'EntityGroupId',
        'committerId'   => 'CommitterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->revision) {
            $res['Revision'] = $this->revision;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->entityGroupId) {
            $res['EntityGroupId'] = $this->entityGroupId;
        }
        if (null !== $this->committerId) {
            $res['CommitterId'] = $this->committerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowEntitySnapshotResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Revision'])) {
            $model->revision = $map['Revision'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['EntityGroupId'])) {
            $model->entityGroupId = $map['EntityGroupId'];
        }
        if (isset($map['CommitterId'])) {
            $model->committerId = $map['CommitterId'];
        }

        return $model;
    }
}
