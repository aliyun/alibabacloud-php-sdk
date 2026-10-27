<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribePxfsAccessTokensResponseBody\data;

use AlibabaCloud\Dara\Model;

class accessTokens extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $expiresAt;

    /**
     * @var string
     */
    public $identityName;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tokenId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'expiresAt' => 'ExpiresAt',
        'identityName' => 'IdentityName',
        'label' => 'Label',
        'status' => 'Status',
        'tokenId' => 'TokenId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->expiresAt) {
            $res['ExpiresAt'] = $this->expiresAt;
        }

        if (null !== $this->identityName) {
            $res['IdentityName'] = $this->identityName;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tokenId) {
            $res['TokenId'] = $this->tokenId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExpiresAt'])) {
            $model->expiresAt = $map['ExpiresAt'];
        }

        if (isset($map['IdentityName'])) {
            $model->identityName = $map['IdentityName'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TokenId'])) {
            $model->tokenId = $map['TokenId'];
        }

        return $model;
    }
}
