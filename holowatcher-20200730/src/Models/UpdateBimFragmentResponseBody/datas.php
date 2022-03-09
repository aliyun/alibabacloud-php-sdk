<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimFragmentResponseBody;

use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @var int
     */
    public $drawingId;

    /**
     * @var string
     */
    public $drawingMode;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'drawingId'   => 'DrawingId',
        'drawingMode' => 'DrawingMode',
        'id'          => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drawingId) {
            $res['DrawingId'] = $this->drawingId;
        }
        if (null !== $this->drawingMode) {
            $res['DrawingMode'] = $this->drawingMode;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['DrawingId'])) {
            $model->drawingId = $map['DrawingId'];
        }
        if (isset($map['DrawingMode'])) {
            $model->drawingMode = $map['DrawingMode'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
