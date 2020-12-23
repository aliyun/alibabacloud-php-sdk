<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionAdvanceRequest;

use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionAdvanceRequest\detectRegion\line;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionAdvanceRequest\detectRegion\rect;
use AlibabaCloud\Tea\Model;

class detectRegion extends Model
{
    /**
     * @var rect
     */
    public $rect;

    /**
     * @var line
     */
    public $line;
    protected $_name = [
        'rect' => 'Rect',
        'line' => 'Line',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rect) {
            $res['Rect'] = null !== $this->rect ? $this->rect->toMap() : null;
        }
        if (null !== $this->line) {
            $res['Line'] = null !== $this->line ? $this->line->toMap() : null;
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
        if (isset($map['Rect'])) {
            $model->rect = rect::fromMap($map['Rect']);
        }
        if (isset($map['Line'])) {
            $model->line = line::fromMap($map['Line']);
        }

        return $model;
    }
}
