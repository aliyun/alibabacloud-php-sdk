<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipSegmentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipSegmentResponseBody\eipSegments\eipSegment;

class eipSegments extends Model
{
    /**
     * @var eipSegment[]
     */
    public $eipSegment;
    protected $_name = [
        'eipSegment' => 'EipSegment',
    ];

    public function validate()
    {
        if (\is_array($this->eipSegment)) {
            Model::validateArray($this->eipSegment);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eipSegment) {
            if (\is_array($this->eipSegment)) {
                $res['EipSegment'] = [];
                $n1                = 0;
                foreach ($this->eipSegment as $item1) {
                    $res['EipSegment'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['EipSegment'])) {
            if (!empty($map['EipSegment'])) {
                $model->eipSegment = [];
                $n1                = 0;
                foreach ($map['EipSegment'] as $item1) {
                    $model->eipSegment[$n1++] = eipSegment::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
