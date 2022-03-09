<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimDrawingRenderResponseBody;

use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @var mixed[]
     */
    public $blocks;

    /**
     * @var string
     */
    public $fontPrefix;

    /**
     * @var string
     */
    public $geometryPrefix;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'blocks'         => 'Blocks',
        'fontPrefix'     => 'FontPrefix',
        'geometryPrefix' => 'GeometryPrefix',
        'path'           => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blocks) {
            $res['Blocks'] = $this->blocks;
        }
        if (null !== $this->fontPrefix) {
            $res['FontPrefix'] = $this->fontPrefix;
        }
        if (null !== $this->geometryPrefix) {
            $res['GeometryPrefix'] = $this->geometryPrefix;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Blocks'])) {
            $model->blocks = $map['Blocks'];
        }
        if (isset($map['FontPrefix'])) {
            $model->fontPrefix = $map['FontPrefix'];
        }
        if (isset($map['GeometryPrefix'])) {
            $model->geometryPrefix = $map['GeometryPrefix'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
