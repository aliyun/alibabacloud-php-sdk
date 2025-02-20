<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateCheckRunResponseBody\result\output;

use AlibabaCloud\Dara\Model;

class images extends Model
{
    /**
     * @var string
     */
    public $alt;
    /**
     * @var string
     */
    public $caption;
    /**
     * @var string
     */
    public $imageUrl;
    protected $_name = [
        'alt'      => 'alt',
        'caption'  => 'caption',
        'imageUrl' => 'imageUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alt) {
            $res['alt'] = $this->alt;
        }

        if (null !== $this->caption) {
            $res['caption'] = $this->caption;
        }

        if (null !== $this->imageUrl) {
            $res['imageUrl'] = $this->imageUrl;
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
        if (isset($map['alt'])) {
            $model->alt = $map['alt'];
        }

        if (isset($map['caption'])) {
            $model->caption = $map['caption'];
        }

        if (isset($map['imageUrl'])) {
            $model->imageUrl = $map['imageUrl'];
        }

        return $model;
    }
}
