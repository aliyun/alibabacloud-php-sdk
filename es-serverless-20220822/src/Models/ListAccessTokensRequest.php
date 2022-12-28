<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20220822\Models;

use AlibabaCloud\Tea\Model;

class ListAccessTokensRequest extends Model
{
    /**
     * @var string
     */
    public $tokenId;
    protected $_name = [
        'tokenId' => 'tokenId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tokenId) {
            $res['tokenId'] = $this->tokenId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAccessTokensRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['tokenId'])) {
            $model->tokenId = $map['tokenId'];
        }

        return $model;
    }
}
