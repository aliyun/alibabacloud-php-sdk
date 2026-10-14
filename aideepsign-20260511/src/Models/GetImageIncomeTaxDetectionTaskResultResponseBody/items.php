<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageIncomeTaxDetectionTaskResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageIncomeTaxDetectionTaskResultResponseBody\items\coordinates;

class items extends Model
{
    /**
     * @var string
     */
    public $abnormalItem;

    /**
     * @var coordinates[]
     */
    public $coordinates;

    /**
     * @var string
     */
    public $stage;
    protected $_name = [
        'abnormalItem' => 'AbnormalItem',
        'coordinates' => 'Coordinates',
        'stage' => 'Stage',
    ];

    public function validate()
    {
        if (\is_array($this->coordinates)) {
            Model::validateArray($this->coordinates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnormalItem) {
            $res['AbnormalItem'] = $this->abnormalItem;
        }

        if (null !== $this->coordinates) {
            if (\is_array($this->coordinates)) {
                $res['Coordinates'] = [];
                $n1 = 0;
                foreach ($this->coordinates as $item1) {
                    $res['Coordinates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
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
        if (isset($map['AbnormalItem'])) {
            $model->abnormalItem = $map['AbnormalItem'];
        }

        if (isset($map['Coordinates'])) {
            if (!empty($map['Coordinates'])) {
                $model->coordinates = [];
                $n1 = 0;
                foreach ($map['Coordinates'] as $item1) {
                    $model->coordinates[$n1] = coordinates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }

        return $model;
    }
}
