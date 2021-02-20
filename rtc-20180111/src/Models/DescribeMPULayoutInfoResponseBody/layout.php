<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutInfoResponseBody;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutInfoResponseBody\layout\panes;
use AlibabaCloud\Tea\Model;

class layout extends Model
{
    /**
     * @var int
     */
    public $layoutId;

    /**
     * @var panes
     */
    public $panes;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $audioMixCount;
    protected $_name = [
        'layoutId'      => 'LayoutId',
        'panes'         => 'Panes',
        'name'          => 'Name',
        'audioMixCount' => 'AudioMixCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->panes) {
            $res['Panes'] = null !== $this->panes ? $this->panes->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->audioMixCount) {
            $res['AudioMixCount'] = $this->audioMixCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return layout
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }
        if (isset($map['Panes'])) {
            $model->panes = panes::fromMap($map['Panes']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['AudioMixCount'])) {
            $model->audioMixCount = $map['AudioMixCount'];
        }

        return $model;
    }
}
