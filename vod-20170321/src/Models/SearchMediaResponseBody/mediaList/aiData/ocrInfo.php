<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\aiData;

use AlibabaCloud\Dara\Model;

class ocrInfo extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var float
     */
    public $from;

    /**
     * @var float
     */
    public $to;
    protected $_name = [
        'content' => 'Content',
        'from' => 'From',
        'to' => 'To',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->to) {
            $res['To'] = $this->to;
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
            $model->content = $map['Content'];
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
