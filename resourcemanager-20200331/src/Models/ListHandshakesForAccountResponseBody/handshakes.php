<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListHandshakesForAccountResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListHandshakesForAccountResponseBody\handshakes\handshake;

class handshakes extends Model
{
    /**
     * @var handshake[]
     */
    public $handshake;
    protected $_name = [
        'handshake' => 'Handshake',
    ];

    public function validate()
    {
        if (\is_array($this->handshake)) {
            Model::validateArray($this->handshake);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->handshake) {
            if (\is_array($this->handshake)) {
                $res['Handshake'] = [];
                $n1               = 0;
                foreach ($this->handshake as $item1) {
                    $res['Handshake'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Handshake'])) {
            if (!empty($map['Handshake'])) {
                $model->handshake = [];
                $n1               = 0;
                foreach ($map['Handshake'] as $item1) {
                    $model->handshake[$n1++] = handshake::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
