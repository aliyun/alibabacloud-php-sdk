<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTicketInvoiceResponseBody;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTicketInvoiceResponseBody\data\results;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $orgHeight;

    /**
     * @var int
     */
    public $orgWidth;

    /**
     * @var results[]
     */
    public $results;
    protected $_name = [
        'count'     => 'Count',
        'height'    => 'Height',
        'width'     => 'Width',
        'orgHeight' => 'OrgHeight',
        'orgWidth'  => 'OrgWidth',
        'results'   => 'Results',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->orgHeight) {
            $res['OrgHeight'] = $this->orgHeight;
        }
        if (null !== $this->orgWidth) {
            $res['OrgWidth'] = $this->orgWidth;
        }
        if (null !== $this->results) {
            $res['Results'] = [];
            if (null !== $this->results && \is_array($this->results)) {
                $n = 0;
                foreach ($this->results as $item) {
                    $res['Results'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['OrgHeight'])) {
            $model->orgHeight = $map['OrgHeight'];
        }
        if (isset($map['OrgWidth'])) {
            $model->orgWidth = $map['OrgWidth'];
        }
        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n              = 0;
                foreach ($map['Results'] as $item) {
                    $model->results[$n++] = null !== $item ? results::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
