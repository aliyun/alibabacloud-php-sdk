<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\ListAccessTokensResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\ListAccessTokensResponseBody\accessTokens\accessToken;

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
        if (\is_array($this->accessToken)) {
            Model::validateArray($this->accessToken);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            if (\is_array($this->accessToken)) {
                $res['AccessToken'] = [];
                $n1 = 0;
                foreach ($this->accessToken as $item1) {
                    $res['AccessToken'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AccessToken'])) {
            if (!empty($map['AccessToken'])) {
                $model->accessToken = [];
                $n1 = 0;
                foreach ($map['AccessToken'] as $item1) {
                    $model->accessToken[$n1] = accessToken::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
