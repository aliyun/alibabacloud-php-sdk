<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutInfoListResponseBody\layouts;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutInfoListResponseBody\layouts\layout\panes;

class layout extends Model
{
    /**
     * @var int
     */
    public $audioMixCount;

    /**
     * @var int
     */
    public $layoutId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var panes
     */
    public $panes;
    protected $_name = [
        'audioMixCount' => 'AudioMixCount',
        'layoutId' => 'LayoutId',
        'name' => 'Name',
        'panes' => 'Panes',
    ];

    public function validate()
    {
        if (null !== $this->panes) {
            $this->panes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioMixCount) {
            $res['AudioMixCount'] = $this->audioMixCount;
        }

        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->panes) {
            $res['Panes'] = null !== $this->panes ? $this->panes->toArray($noStream) : $this->panes;
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
        if (isset($map['AudioMixCount'])) {
            $model->audioMixCount = $map['AudioMixCount'];
        }

        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Panes'])) {
            $model->panes = panes::fromMap($map['Panes']);
        }

        return $model;
    }
}
