<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\QueryMotionShopVideoDetectResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class detectResult extends Model
{
    /**
     * @var float[]
     */
    public $box;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $selectedFrameIndex;
    protected $_name = [
        'box'                => 'Box',
        'code'               => 'Code',
        'coverUrl'           => 'CoverUrl',
        'message'            => 'Message',
        'selectedFrameIndex' => 'SelectedFrameIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->box) {
            $res['Box'] = $this->box;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->selectedFrameIndex) {
            $res['SelectedFrameIndex'] = $this->selectedFrameIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detectResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Box'])) {
            if (!empty($map['Box'])) {
                $model->box = $map['Box'];
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['SelectedFrameIndex'])) {
            $model->selectedFrameIndex = $map['SelectedFrameIndex'];
        }

        return $model;
    }
}
