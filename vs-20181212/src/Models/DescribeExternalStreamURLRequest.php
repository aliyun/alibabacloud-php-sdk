<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeExternalStreamURLRequest extends Model
{
    /**
     * @var string
     */
    public $kind;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $profile;

    /**
     * @var string
     */
    public $txId;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'kind'    => 'Kind',
        'ownerId' => 'OwnerId',
        'profile' => 'Profile',
        'txId'    => 'TxId',
        'url'     => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->txId) {
            $res['TxId'] = $this->txId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExternalStreamURLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['TxId'])) {
            $model->txId = $map['TxId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
