<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListKyuubiTokenResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListKyuubiTokenResponseBody\data\tokens;

class data extends Model
{
    /**
     * @var tokens[]
     */
    public $tokens;
    protected $_name = [
        'tokens' => 'tokens',
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
        if (null !== $this->tokens) {
            if (\is_array($this->tokens)) {
                $res['tokens'] = [];
                $n1 = 0;
                foreach ($this->tokens as $item1) {
                    $res['tokens'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['tokens'])) {
            if (!empty($map['tokens'])) {
                $model->tokens = [];
                $n1 = 0;
                foreach ($map['tokens'] as $item1) {
                    $model->tokens[$n1] = tokens::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
