<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyMPULayoutRequest;

use AlibabaCloud\Tea\Model;

class panes extends Model
{
    /**
     * @example 0.2456
     *
     * @var float
     */
    public $height;

    /**
     * @example 0
     *
     * @var int
     */
    public $majorPane;

    /**
     * @example 0
     *
     * @var int
     */
    public $paneId;

    /**
     * @example 0.2456
     *
     * @var float
     */
    public $width;

    /**
     * @example 0.7576
     *
     * @var float
     */
    public $x;

    /**
     * @example 0.7576
     *
     * @var float
     */
    public $y;

    /**
     * @example 0
     *
     * @var int
     */
    public $ZOrder;
    protected $_name = [
        'height'    => 'Height',
        'majorPane' => 'MajorPane',
        'paneId'    => 'PaneId',
        'width'     => 'Width',
        'x'         => 'X',
        'y'         => 'Y',
        'ZOrder'    => 'ZOrder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->majorPane) {
            $res['MajorPane'] = $this->majorPane;
        }
        if (null !== $this->paneId) {
            $res['PaneId'] = $this->paneId;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }
        if (null !== $this->ZOrder) {
            $res['ZOrder'] = $this->ZOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return panes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['MajorPane'])) {
            $model->majorPane = $map['MajorPane'];
        }
        if (isset($map['PaneId'])) {
            $model->paneId = $map['PaneId'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['ZOrder'])) {
            $model->ZOrder = $map['ZOrder'];
        }

        return $model;
    }
}
