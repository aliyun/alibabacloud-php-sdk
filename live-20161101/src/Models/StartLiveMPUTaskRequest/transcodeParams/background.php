<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartLiveMPUTaskRequest\transcodeParams;

use AlibabaCloud\Dara\Model;

class background extends Model
{
    /**
     * @var string
     */
    public $renderMode;

    /**
     * @var string
     */
    public $URL;
    protected $_name = [
        'renderMode' => 'RenderMode',
        'URL' => 'URL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->renderMode) {
            $res['RenderMode'] = $this->renderMode;
        }

        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
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
        if (isset($map['RenderMode'])) {
            $model->renderMode = $map['RenderMode'];
        }

        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }

        return $model;
    }
}
