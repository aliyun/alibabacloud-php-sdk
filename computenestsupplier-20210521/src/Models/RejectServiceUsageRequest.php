<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;

class RejectServiceUsageRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $comments;
    /**
     * @var string
     */
    public $serviceId;
    /**
     * @var int
     */
    public $type;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
