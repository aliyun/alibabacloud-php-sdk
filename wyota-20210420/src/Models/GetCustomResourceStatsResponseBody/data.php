<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\GetCustomResourceStatsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $customResourceCount;

    /**
     * @var int
     */
    public $effectiveCount;

    /**
     * @var int
     */
    public $noCustomResourceCount;

    /**
     * @var int
     */
    public $unEffectiveCount;
    protected $_name = [
        'customResourceCount' => 'CustomResourceCount',
        'effectiveCount' => 'EffectiveCount',
        'noCustomResourceCount' => 'NoCustomResourceCount',
        'unEffectiveCount' => 'UnEffectiveCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customResourceCount) {
            $res['CustomResourceCount'] = $this->customResourceCount;
        }

        if (null !== $this->effectiveCount) {
            $res['EffectiveCount'] = $this->effectiveCount;
        }

        if (null !== $this->noCustomResourceCount) {
            $res['NoCustomResourceCount'] = $this->noCustomResourceCount;
        }

        if (null !== $this->unEffectiveCount) {
            $res['UnEffectiveCount'] = $this->unEffectiveCount;
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
        if (isset($map['CustomResourceCount'])) {
            $model->customResourceCount = $map['CustomResourceCount'];
        }

        if (isset($map['EffectiveCount'])) {
            $model->effectiveCount = $map['EffectiveCount'];
        }

        if (isset($map['NoCustomResourceCount'])) {
            $model->noCustomResourceCount = $map['NoCustomResourceCount'];
        }

        if (isset($map['UnEffectiveCount'])) {
            $model->unEffectiveCount = $map['UnEffectiveCount'];
        }

        return $model;
    }
}
