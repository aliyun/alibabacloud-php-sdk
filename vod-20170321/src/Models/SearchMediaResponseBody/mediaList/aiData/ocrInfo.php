<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\aiData;

use AlibabaCloud\Tea\Model;

class ocrInfo extends Model
{
    /**
     * @description The text content.
     *
     * @example I\\"m Jane.
     *
     * @var string
     */
    public $content;

    /**
     * @description The start time of the subtitle.
     *
     * @example 1.4
     *
     * @var float
     */
    public $from;

    /**
     * @description The end time of the subtitle.
     *
     * @example 2.5
     *
     * @var float
     */
    public $to;
    protected $_name = [
        'content' => 'Content',
        'from'    => 'From',
        'to'      => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ocrInfo
     */
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
