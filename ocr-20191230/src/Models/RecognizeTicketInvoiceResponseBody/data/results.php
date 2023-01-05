<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTicketInvoiceResponseBody\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTicketInvoiceResponseBody\data\results\content;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTicketInvoiceResponseBody\data\results\keyValueInfos;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTicketInvoiceResponseBody\data\results\sliceRectangle;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var content
     */
    public $content;

    /**
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @var keyValueInfos[]
     */
    public $keyValueInfos;

    /**
     * @var sliceRectangle[]
     */
    public $sliceRectangle;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'content'        => 'Content',
        'index'          => 'Index',
        'keyValueInfos'  => 'KeyValueInfos',
        'sliceRectangle' => 'SliceRectangle',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toMap() : null;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->keyValueInfos) {
            $res['KeyValueInfos'] = [];
            if (null !== $this->keyValueInfos && \is_array($this->keyValueInfos)) {
                $n = 0;
                foreach ($this->keyValueInfos as $item) {
                    $res['KeyValueInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sliceRectangle) {
            $res['SliceRectangle'] = [];
            if (null !== $this->sliceRectangle && \is_array($this->sliceRectangle)) {
                $n = 0;
                foreach ($this->sliceRectangle as $item) {
                    $res['SliceRectangle'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = content::fromMap($map['Content']);
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['KeyValueInfos'])) {
            if (!empty($map['KeyValueInfos'])) {
                $model->keyValueInfos = [];
                $n                    = 0;
                foreach ($map['KeyValueInfos'] as $item) {
                    $model->keyValueInfos[$n++] = null !== $item ? keyValueInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SliceRectangle'])) {
            if (!empty($map['SliceRectangle'])) {
                $model->sliceRectangle = [];
                $n                     = 0;
                foreach ($map['SliceRectangle'] as $item) {
                    $model->sliceRectangle[$n++] = null !== $item ? sliceRectangle::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
