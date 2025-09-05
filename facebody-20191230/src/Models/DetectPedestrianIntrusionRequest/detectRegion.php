<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionRequest\detectRegion\line;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionRequest\detectRegion\rect;

class detectRegion extends Model
{
    /**
     * @var line
     */
    public $line;

    /**
     * @var rect
     */
    public $rect;
    protected $_name = [
        'line' => 'Line',
        'rect' => 'Rect',
    ];

    public function validate()
    {
        if (null !== $this->line) {
            $this->line->validate();
        }
        if (null !== $this->rect) {
            $this->rect->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->line) {
            $res['Line'] = null !== $this->line ? $this->line->toArray($noStream) : $this->line;
        }

        if (null !== $this->rect) {
            $res['Rect'] = null !== $this->rect ? $this->rect->toArray($noStream) : $this->rect;
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
        if (isset($map['Line'])) {
            $model->line = line::fromMap($map['Line']);
        }

        if (isset($map['Rect'])) {
            $model->rect = rect::fromMap($map['Rect']);
        }

        return $model;
    }
}
