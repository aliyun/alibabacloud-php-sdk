<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results;

use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results\publicFigure\location;
use AlibabaCloud\Tea\Model;

class publicFigure extends Model
{
    /**
     * @description The information about the code of the identified figure.
     *
     * @example xxx001
     *
     * @var string
     */
    public $figureId;

    /**
     * @var string
     */
    public $figureName;

    /**
     * @var location[]
     */
    public $location;
    protected $_name = [
        'figureId' => 'FigureId',
        'figureName' => 'FigureName',
        'location' => 'Location',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->figureId) {
            $res['FigureId'] = $this->figureId;
        }
        if (null !== $this->figureName) {
            $res['FigureName'] = $this->figureName;
        }
        if (null !== $this->location) {
            $res['Location'] = [];
            if (null !== $this->location && \is_array($this->location)) {
                $n = 0;
                foreach ($this->location as $item) {
                    $res['Location'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publicFigure
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FigureId'])) {
            $model->figureId = $map['FigureId'];
        }
        if (isset($map['FigureName'])) {
            $model->figureName = $map['FigureName'];
        }
        if (isset($map['Location'])) {
            if (!empty($map['Location'])) {
                $model->location = [];
                $n = 0;
                foreach ($map['Location'] as $item) {
                    $model->location[$n++] = null !== $item ? location::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
