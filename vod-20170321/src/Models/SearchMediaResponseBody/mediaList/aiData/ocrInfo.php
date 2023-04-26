<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\aiData;

use AlibabaCloud\Tea\Model;

class ocrInfo extends Model
{
    /**
     * @description 文本内容
     *
     * @var string
     */
    public $content;

    /**
     * @description 片段起始时间
     *
     * @var float
     */
    public $from;

    /**
     * @description 片段结束时间
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
