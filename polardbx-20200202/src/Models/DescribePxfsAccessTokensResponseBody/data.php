<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribePxfsAccessTokensResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribePxfsAccessTokensResponseBody\data\accessTokens;

class data extends Model
{
    /**
     * @var accessTokens[]
     */
    public $accessTokens;
    protected $_name = [
        'accessTokens' => 'AccessTokens',
    ];

    public function validate()
    {
        if (\is_array($this->accessTokens)) {
            Model::validateArray($this->accessTokens);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessTokens) {
            if (\is_array($this->accessTokens)) {
                $res['AccessTokens'] = [];
                $n1 = 0;
                foreach ($this->accessTokens as $item1) {
                    $res['AccessTokens'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccessTokens'])) {
            if (!empty($map['AccessTokens'])) {
                $model->accessTokens = [];
                $n1 = 0;
                foreach ($map['AccessTokens'] as $item1) {
                    $model->accessTokens[$n1] = accessTokens::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
