<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListHandshakesForResourceDirectoryResponse;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListHandshakesForResourceDirectoryResponse\handshakes\handshake;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('handshake', $this->handshake, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->handshake) {
            $res['Handshake'] = [];
            if (null !== $this->handshake && \is_array($this->handshake)) {
                $n = 0;
                foreach ($this->handshake as $item) {
                    $res['Handshake'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return handshakes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Handshake'])) {
            if (!empty($map['Handshake'])) {
                $model->handshake = [];
                $n                = 0;
                foreach ($map['Handshake'] as $item) {
                    $model->handshake[$n++] = null !== $item ? handshake::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
