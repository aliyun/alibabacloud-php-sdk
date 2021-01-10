<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\JoinLiveResponseBody\data;

use AlibabaCloud\SDK\Idrsservice\V20200630\Models\JoinLiveResponseBody\data\tokenData\turn;
use AlibabaCloud\Tea\Model;

class tokenData extends Model
{
    /**
     * @var turn
     */
    public $turn;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $nonce;

    /**
     * @var string[]
     */
    public $gslb;

    /**
     * @var string
     */
    public $liveId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'turn'      => 'Turn',
        'token'     => 'Token',
        'appId'     => 'AppId',
        'nonce'     => 'Nonce',
        'gslb'      => 'Gslb',
        'liveId'    => 'LiveId',
        'userId'    => 'UserId',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->turn) {
            $res['Turn'] = null !== $this->turn ? $this->turn->toMap() : null;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->nonce) {
            $res['Nonce'] = $this->nonce;
        }
        if (null !== $this->gslb) {
            $res['Gslb'] = $this->gslb;
        }
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tokenData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Turn'])) {
            $model->turn = turn::fromMap($map['Turn']);
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Nonce'])) {
            $model->nonce = $map['Nonce'];
        }
        if (isset($map['Gslb'])) {
            if (!empty($map['Gslb'])) {
                $model->gslb = $map['Gslb'];
            }
        }
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
