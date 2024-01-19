<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\ListAccessTokensResponseBody;

use AlibabaCloud\SDK\Smc\V20190601\Models\ListAccessTokensResponseBody\accessTokens\accessToken;
use AlibabaCloud\Tea\Model;

class accessTokens extends Model
{
    /**
     * @var accessToken[]
     */
    public $accessToken;
    protected $_name = [
        'accessToken' => 'AccessToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = [];
            if (null !== $this->accessToken && \is_array($this->accessToken)) {
                $n = 0;
                foreach ($this->accessToken as $item) {
                    $res['AccessToken'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessTokens
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            if (!empty($map['AccessToken'])) {
                $model->accessToken = [];
                $n                  = 0;
                foreach ($map['AccessToken'] as $item) {
                    $model->accessToken[$n++] = null !== $item ? accessToken::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
