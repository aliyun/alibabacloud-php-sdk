<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVATInvoiceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVATInvoiceResponseBody\data\box;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVATInvoiceResponseBody\data\content;

class data extends Model
{
    /**
     * @var box
     */
    public $box;

    /**
     * @var content
     */
    public $content;
    protected $_name = [
        'box' => 'Box',
        'content' => 'Content',
    ];

    public function validate()
    {
        if (null !== $this->box) {
            $this->box->validate();
        }
        if (null !== $this->content) {
            $this->content->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->box) {
            $res['Box'] = null !== $this->box ? $this->box->toArray($noStream) : $this->box;
        }

        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toArray($noStream) : $this->content;
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
        if (isset($map['Box'])) {
            $model->box = box::fromMap($map['Box']);
        }

        if (isset($map['Content'])) {
            $model->content = content::fromMap($map['Content']);
        }

        return $model;
    }
}
