<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\RefreshAuthTokensResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\RefreshAuthTokensResponseBody\data\tokens;

class data extends Model
{
    /**
     * @var string
     */
    public $baseUrl;

    /**
     * @var tokens[]
     */
    public $tokens;
    protected $_name = [
        'baseUrl' => 'BaseUrl',
        'tokens' => 'Tokens',
    ];

    public function validate()
    {
        if (\is_array($this->tokens)) {
            Model::validateArray($this->tokens);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseUrl) {
            $res['BaseUrl'] = $this->baseUrl;
        }

        if (null !== $this->tokens) {
            if (\is_array($this->tokens)) {
                $res['Tokens'] = [];
                $n1 = 0;
                foreach ($this->tokens as $item1) {
                    $res['Tokens'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BaseUrl'])) {
            $model->baseUrl = $map['BaseUrl'];
        }

        if (isset($map['Tokens'])) {
            if (!empty($map['Tokens'])) {
                $model->tokens = [];
                $n1 = 0;
                foreach ($map['Tokens'] as $item1) {
                    $model->tokens[$n1] = tokens::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
