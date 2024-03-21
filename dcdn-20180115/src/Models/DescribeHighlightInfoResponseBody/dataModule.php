<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeHighlightInfoResponseBody;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The highlighted data.
     *
     * @example [\"data:image/php;base64\"]
     *
     * @var string
     */
    public $hit;

    /**
     * @description The type of the highlight data.
     *
     * @example URL
     *
     * @var string
     */
    public $key;

    /**
     * @description Complete data.
     *
     * @example data:image/php;base64,PD9waHAXXXXXXanVzdHR0dHXXXXXB0ZXN0Ijs/Pg==
     *
     * @var string
     */
    public $raw;
    protected $_name = [
        'hit' => 'Hit',
        'key' => 'Key',
        'raw' => 'Raw',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hit) {
            $res['Hit'] = $this->hit;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->raw) {
            $res['Raw'] = $this->raw;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hit'])) {
            $model->hit = $map['Hit'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Raw'])) {
            $model->raw = $map['Raw'];
        }

        return $model;
    }
}
