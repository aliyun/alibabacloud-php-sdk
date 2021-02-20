<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutInfoListResponseBody\layouts\layout\panes;

use AlibabaCloud\Tea\Model;

class panes extends Model
{
    /**
     * @var int
     */
    public $majorPane;

    /**
     * @var float
     */
    public $width;

    /**
     * @var float
     */
    public $height;

    /**
     * @var float
     */
    public $y;

    /**
     * @var int
     */
    public $paneId;

    /**
     * @var int
     */
    public $ZOrder;

    /**
     * @var float
     */
    public $x;
    protected $_name = [
        'majorPane' => 'MajorPane',
        'width'     => 'Width',
        'height'    => 'Height',
        'y'         => 'Y',
        'paneId'    => 'PaneId',
        'ZOrder'    => 'ZOrder',
        'x'         => 'X',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->majorPane) {
            $res['MajorPane'] = $this->majorPane;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }
        if (null !== $this->paneId) {
            $res['PaneId'] = $this->paneId;
        }
        if (null !== $this->ZOrder) {
            $res['ZOrder'] = $this->ZOrder;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
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
        if (isset($map['MajorPane'])) {
            $model->majorPane = $map['MajorPane'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['PaneId'])) {
            $model->paneId = $map['PaneId'];
        }
        if (isset($map['ZOrder'])) {
            $model->ZOrder = $map['ZOrder'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }

        return $model;
    }
}
