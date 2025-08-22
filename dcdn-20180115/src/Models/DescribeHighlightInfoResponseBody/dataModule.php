<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeHighlightInfoResponseBody;

use AlibabaCloud\Dara\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $hit;

    /**
     * @var string
     */
    public $key;

    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
