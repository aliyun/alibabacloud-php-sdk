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
     * @var string[]
     */
    public $languageHints;

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
        'languageHints' => 'languageHints',
        'resolution' => 'resolution',
        'watermark' => 'watermark',
    ];

    public function validate()
    {
        if (\is_array($this->languageHints)) {
            Model::validateArray($this->languageHints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fps) {
            $res['fps'] = $this->fps;
        }

        if (null !== $this->languageHints) {
            if (\is_array($this->languageHints)) {
                $res['languageHints'] = [];
                $n1 = 0;
                foreach ($this->languageHints as $item1) {
                    $res['languageHints'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['languageHints'])) {
            if (!empty($map['languageHints'])) {
                $model->languageHints = [];
                $n1 = 0;
                foreach ($map['languageHints'] as $item1) {
                    $model->languageHints[$n1] = $item1;
                    ++$n1;
                }
            }
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
