<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\MetadataResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var bool
     */
    public $hasPretendPermission;

    /**
     * @var string
     */
    public $internalEndpoint;

    /**
     * @var string
     */
    public $pretendUserId;

    /**
     * @var int
     */
    public $userStatus;
    protected $_name = [
        'endpoint' => 'Endpoint',
        'hasPretendPermission' => 'HasPretendPermission',
        'internalEndpoint' => 'InternalEndpoint',
        'pretendUserId' => 'PretendUserId',
        'userStatus' => 'UserStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->hasPretendPermission) {
            $res['HasPretendPermission'] = $this->hasPretendPermission;
        }

        if (null !== $this->internalEndpoint) {
            $res['InternalEndpoint'] = $this->internalEndpoint;
        }

        if (null !== $this->pretendUserId) {
            $res['PretendUserId'] = $this->pretendUserId;
        }

        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
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
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['HasPretendPermission'])) {
            $model->hasPretendPermission = $map['HasPretendPermission'];
        }

        if (isset($map['InternalEndpoint'])) {
            $model->internalEndpoint = $map['InternalEndpoint'];
        }

        if (isset($map['PretendUserId'])) {
            $model->pretendUserId = $map['PretendUserId'];
        }

        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }

        return $model;
    }
}
