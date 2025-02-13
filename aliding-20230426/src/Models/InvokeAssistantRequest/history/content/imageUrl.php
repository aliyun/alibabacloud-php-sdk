<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\history\content;

use AlibabaCloud\Dara\Model;

class imageUrl extends Model
{
    /**
     * @var string
     */
    public $detail;
    /**
     * @var string
     */
    public $imageDesc;
    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'detail'    => 'detail',
        'imageDesc' => 'imageDesc',
        'url'       => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detail) {
            $res['detail'] = $this->detail;
        }

        if (null !== $this->imageDesc) {
            $res['imageDesc'] = $this->imageDesc;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['detail'])) {
            $model->detail = $map['detail'];
        }

        if (isset($map['imageDesc'])) {
            $model->imageDesc = $map['imageDesc'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
