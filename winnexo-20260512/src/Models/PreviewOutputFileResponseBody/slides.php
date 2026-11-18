<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\PreviewOutputFileResponseBody;

use AlibabaCloud\Dara\Model;

class slides extends Model
{
    /**
     * @var string
     */
    public $displayText;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $slideId;

    /**
     * @var int
     */
    public $slideIndex;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'displayText' => 'displayText',
        'imageUrl' => 'imageUrl',
        'slideId' => 'slideId',
        'slideIndex' => 'slideIndex',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayText) {
            $res['displayText'] = $this->displayText;
        }

        if (null !== $this->imageUrl) {
            $res['imageUrl'] = $this->imageUrl;
        }

        if (null !== $this->slideId) {
            $res['slideId'] = $this->slideId;
        }

        if (null !== $this->slideIndex) {
            $res['slideIndex'] = $this->slideIndex;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['displayText'])) {
            $model->displayText = $map['displayText'];
        }

        if (isset($map['imageUrl'])) {
            $model->imageUrl = $map['imageUrl'];
        }

        if (isset($map['slideId'])) {
            $model->slideId = $map['slideId'];
        }

        if (isset($map['slideIndex'])) {
            $model->slideIndex = $map['slideIndex'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
