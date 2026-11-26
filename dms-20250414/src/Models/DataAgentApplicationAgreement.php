<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class DataAgentApplicationAgreement extends Model
{
    /**
     * @var string
     */
    public $expiresAt;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $signedAt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'expiresAt' => 'ExpiresAt',
        'regionId' => 'RegionId',
        'signedAt' => 'SignedAt',
        'status' => 'Status',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiresAt) {
            $res['ExpiresAt'] = $this->expiresAt;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->signedAt) {
            $res['SignedAt'] = $this->signedAt;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['ExpiresAt'])) {
            $model->expiresAt = $map['ExpiresAt'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SignedAt'])) {
            $model->signedAt = $map['SignedAt'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
