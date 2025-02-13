<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CommitFileResponseBody\dentry;

use AlibabaCloud\Dara\Model;

class thumbnail extends Model
{
    /**
     * @var int
     */
    public $height;
    /**
     * @var string
     */
    public $url;
    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'height' => 'Height',
        'url'    => 'Url',
        'width'  => 'Width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
