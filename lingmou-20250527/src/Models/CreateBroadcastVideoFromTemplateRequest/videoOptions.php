<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models\CreateBroadcastVideoFromTemplateRequest;

use AlibabaCloud\Dara\Model;

class videoOptions extends Model
{
    /**
     * @var int
     */
    public $fps;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var bool
     */
    public $watermark;
    protected $_name = [
        'fps' => 'fps',
        'resolution' => 'resolution',
        'watermark' => 'watermark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fps) {
            $res['fps'] = $this->fps;
        }

        if (null !== $this->resolution) {
            $res['resolution'] = $this->resolution;
        }

        if (null !== $this->watermark) {
            $res['watermark'] = $this->watermark;
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
        if (isset($map['fps'])) {
            $model->fps = $map['fps'];
        }

        if (isset($map['resolution'])) {
            $model->resolution = $map['resolution'];
        }

        if (isset($map['watermark'])) {
            $model->watermark = $map['watermark'];
        }

        return $model;
    }
}
