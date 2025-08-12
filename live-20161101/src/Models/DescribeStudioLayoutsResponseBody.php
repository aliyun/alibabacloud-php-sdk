<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeStudioLayoutsResponseBody\studioLayouts;

class DescribeStudioLayoutsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var studioLayouts[]
     */
    public $studioLayouts;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'requestId' => 'RequestId',
        'studioLayouts' => 'StudioLayouts',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->studioLayouts)) {
            Model::validateArray($this->studioLayouts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->studioLayouts) {
            if (\is_array($this->studioLayouts)) {
                $res['StudioLayouts'] = [];
                $n1 = 0;
                foreach ($this->studioLayouts as $item1) {
                    $res['StudioLayouts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StudioLayouts'])) {
            if (!empty($map['StudioLayouts'])) {
                $model->studioLayouts = [];
                $n1 = 0;
                foreach ($map['StudioLayouts'] as $item1) {
                    $model->studioLayouts[$n1] = studioLayouts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
