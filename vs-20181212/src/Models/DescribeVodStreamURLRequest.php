<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodStreamURLRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $txId;
    protected $_name = [
        'ownerId' => 'OwnerId',
        'url'     => 'Url',
        'txId'    => 'TxId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->txId) {
            $res['TxId'] = $this->txId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodStreamURLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['TxId'])) {
            $model->txId = $map['TxId'];
        }

        return $model;
    }
}
