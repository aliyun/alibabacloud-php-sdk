<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTicketInvoiceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTicketInvoiceResponseBody\data\results\content;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTicketInvoiceResponseBody\data\results\keyValueInfos;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTicketInvoiceResponseBody\data\results\sliceRectangle;

class results extends Model
{
    /**
     * @var content
     */
    public $content;

    /**
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
        'content' => 'Content',
        'index' => 'Index',
        'keyValueInfos' => 'KeyValueInfos',
        'sliceRectangle' => 'SliceRectangle',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->content) {
            $this->content->validate();
        }
        if (\is_array($this->keyValueInfos)) {
            Model::validateArray($this->keyValueInfos);
        }
        if (\is_array($this->sliceRectangle)) {
            Model::validateArray($this->sliceRectangle);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toArray($noStream) : $this->content;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->keyValueInfos) {
            if (\is_array($this->keyValueInfos)) {
                $res['KeyValueInfos'] = [];
                $n1 = 0;
                foreach ($this->keyValueInfos as $item1) {
                    $res['KeyValueInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sliceRectangle) {
            if (\is_array($this->sliceRectangle)) {
                $res['SliceRectangle'] = [];
                $n1 = 0;
                foreach ($this->sliceRectangle as $item1) {
                    $res['SliceRectangle'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Content'])) {
            $model->content = content::fromMap($map['Content']);
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['KeyValueInfos'])) {
            if (!empty($map['KeyValueInfos'])) {
                $model->keyValueInfos = [];
                $n1 = 0;
                foreach ($map['KeyValueInfos'] as $item1) {
                    $model->keyValueInfos[$n1] = keyValueInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SliceRectangle'])) {
            if (!empty($map['SliceRectangle'])) {
                $model->sliceRectangle = [];
                $n1 = 0;
                foreach ($map['SliceRectangle'] as $item1) {
                    $model->sliceRectangle[$n1] = sliceRectangle::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
