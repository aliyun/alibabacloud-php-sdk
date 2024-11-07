<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class RejectServiceUsageRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 10CM943JP0EN9D51H
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Reject comments.
     *
     * @example Thanks for your application, please add your industry information.
     *
     * @var string
     */
    public $comments;

    /**
     * @description The service ID.
     *
     * This parameter is required.
     * @example service-2117508c874c41xxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The share type of the service. Default value: SharedAccount. Valid values:
     *
     *   SharedAccount: The service is shared by multiple accounts.
     *   Reseller: The service is distributed.
     *
     * @example SharedAccount
     *
     * @var int
     */
    public $type;

    /**
     * @description User ali uid.
     *
     * This parameter is required.
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
