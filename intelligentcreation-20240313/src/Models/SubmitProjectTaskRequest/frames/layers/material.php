<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest\frames\layers;

use AlibabaCloud\Tea\Model;

class material extends Model
{
    /**
     * @example video/mp4
     *
     * @var string
     */
    public $format;

    /**
     * @example 38863
     *
     * @var string
     */
    public $id;

    /**
     * @example https://meeting.dingtalk.com/j/1COFppy0POR
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'format' => 'format',
        'id'     => 'id',
        'url'    => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->format) {
            $res['format'] = $this->format;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return material
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['format'])) {
            $model->format = $map['format'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
