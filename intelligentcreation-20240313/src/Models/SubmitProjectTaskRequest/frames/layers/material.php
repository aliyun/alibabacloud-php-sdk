<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest\frames\layers;

use AlibabaCloud\Tea\Model;

class material extends Model
{
    /**
     * @var string
     */
    public $anchorStyleLevel;

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
     * @var string
     */
    public $speed;

    /**
     * @example https://meeting.dingtalk.com/j/1COFppy0POR
     *
     * @var string
     */
    public $url;

    /**
     * @var int
     */
    public $volume;
    protected $_name = [
        'anchorStyleLevel' => 'anchorStyleLevel',
        'format'           => 'format',
        'id'               => 'id',
        'speed'            => 'speed',
        'url'              => 'url',
        'volume'           => 'volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anchorStyleLevel) {
            $res['anchorStyleLevel'] = $this->anchorStyleLevel;
        }
        if (null !== $this->format) {
            $res['format'] = $this->format;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->speed) {
            $res['speed'] = $this->speed;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        if (null !== $this->volume) {
            $res['volume'] = $this->volume;
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
        if (isset($map['anchorStyleLevel'])) {
            $model->anchorStyleLevel = $map['anchorStyleLevel'];
        }
        if (isset($map['format'])) {
            $model->format = $map['format'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['speed'])) {
            $model->speed = $map['speed'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }
        if (isset($map['volume'])) {
            $model->volume = $map['volume'];
        }

        return $model;
    }
}
