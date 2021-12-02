<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionRequest;

use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionRequest\detectRegion\line;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionRequest\detectRegion\rect;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->line) {
            $res['Line'] = null !== $this->line ? $this->line->toMap() : null;
        }
        if (null !== $this->rect) {
            $res['Rect'] = null !== $this->rect ? $this->rect->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detectRegion
     */
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
