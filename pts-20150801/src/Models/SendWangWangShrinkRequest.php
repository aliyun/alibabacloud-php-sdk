<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20150801\Models;

use AlibabaCloud\Tea\Model;

class SendWangWangShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $toShrink;
    protected $_name = [
        'msg'      => 'Msg',
        'title'    => 'Title',
        'toShrink' => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->toShrink) {
            $res['To'] = $this->toShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendWangWangShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['To'])) {
            $model->toShrink = $map['To'];
        }

        return $model;
    }
}
