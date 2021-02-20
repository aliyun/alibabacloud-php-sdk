<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models\DescribeSessionResponseBody;

use AlibabaCloud\Tea\Model;

class session extends Model
{
    /**
     * @var int
     */
    public $TTL;

    /**
     * @var int
     */
    public $expired;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var int
     */
    public $modifiedAt;

    /**
     * @var string
     */
    public $loginSession;

    /**
     * @var int
     */
    public $sessionId;

    /**
     * @var string
     */
    public $asset;
    protected $_name = [
        'TTL'          => 'TTL',
        'expired'      => 'Expired',
        'createdAt'    => 'CreatedAt',
        'aliUid'       => 'AliUid',
        'modifiedAt'   => 'ModifiedAt',
        'loginSession' => 'LoginSession',
        'sessionId'    => 'SessionId',
        'asset'        => 'Asset',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->TTL) {
            $res['TTL'] = $this->TTL;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->modifiedAt) {
            $res['ModifiedAt'] = $this->modifiedAt;
        }
        if (null !== $this->loginSession) {
            $res['LoginSession'] = $this->loginSession;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->asset) {
            $res['Asset'] = $this->asset;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return session
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TTL'])) {
            $model->TTL = $map['TTL'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['ModifiedAt'])) {
            $model->modifiedAt = $map['ModifiedAt'];
        }
        if (isset($map['LoginSession'])) {
            $model->loginSession = $map['LoginSession'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['Asset'])) {
            $model->asset = $map['Asset'];
        }

        return $model;
    }
}
