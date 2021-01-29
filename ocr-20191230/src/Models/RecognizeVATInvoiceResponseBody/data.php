<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVATInvoiceResponseBody;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVATInvoiceResponseBody\data\box;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeVATInvoiceResponseBody\data\content;
use AlibabaCloud\Tea\Model;

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
        'box'     => 'Box',
        'content' => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->box) {
            $res['Box'] = null !== $this->box ? $this->box->toMap() : null;
        }
        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
