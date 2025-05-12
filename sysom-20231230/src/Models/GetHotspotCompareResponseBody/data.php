<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotspotCompareResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotspotCompareResponseBody\data\flame;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotspotCompareResponseBody\data\seriesInstance1;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetHotspotCompareResponseBody\data\seriesInstance2;

class data extends Model
{
    /**
     * @var flame
     */
    public $flame;

    /**
     * @var seriesInstance1
     */
    public $seriesInstance1;

    /**
     * @var seriesInstance2
     */
    public $seriesInstance2;
    protected $_name = [
        'flame' => 'flame',
        'seriesInstance1' => 'series_instance1',
        'seriesInstance2' => 'series_instance2',
    ];

    public function validate()
    {
        if (null !== $this->flame) {
            $this->flame->validate();
        }
        if (null !== $this->seriesInstance1) {
            $this->seriesInstance1->validate();
        }
        if (null !== $this->seriesInstance2) {
            $this->seriesInstance2->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flame) {
            $res['flame'] = null !== $this->flame ? $this->flame->toArray($noStream) : $this->flame;
        }

        if (null !== $this->seriesInstance1) {
            $res['series_instance1'] = null !== $this->seriesInstance1 ? $this->seriesInstance1->toArray($noStream) : $this->seriesInstance1;
        }

        if (null !== $this->seriesInstance2) {
            $res['series_instance2'] = null !== $this->seriesInstance2 ? $this->seriesInstance2->toArray($noStream) : $this->seriesInstance2;
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
        if (isset($map['flame'])) {
            $model->flame = flame::fromMap($map['flame']);
        }

        if (isset($map['series_instance1'])) {
            $model->seriesInstance1 = seriesInstance1::fromMap($map['series_instance1']);
        }

        if (isset($map['series_instance2'])) {
            $model->seriesInstance2 = seriesInstance2::fromMap($map['series_instance2']);
        }

        return $model;
    }
}
