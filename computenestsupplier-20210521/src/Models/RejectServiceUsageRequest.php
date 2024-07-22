<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class RejectServiceUsageRequest extends Model
{
    /**
     * @example 10CM943JP0EN9D51H
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $comments;

    /**
     * @description This parameter is required.
     *
     * @example service-2117508c874c41xxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @example SharedAccount
     *
     * @var int
     */
    public $type;

    /**
     * @description This parameter is required.
     *
     * @example 1563457855xxxxxx
     *
     * @var int
     */
    public $userAliUid;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'comments'    => 'Comments',
        'serviceId'   => 'ServiceId',
        'type'        => 'Type',
        'userAliUid'  => 'UserAliUid',
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
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userAliUid) {
            $res['UserAliUid'] = $this->userAliUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RejectServiceUsageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserAliUid'])) {
            $model->userAliUid = $map['UserAliUid'];
        }

        return $model;
    }
}
