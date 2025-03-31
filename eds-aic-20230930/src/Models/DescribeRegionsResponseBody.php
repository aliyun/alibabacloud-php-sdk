<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeRegionsResponseBody\regionModels;

class DescribeRegionsResponseBody extends Model
{
    /**
     * @var regionModels[]
     */
    public $regionModels;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'regionModels' => 'RegionModels',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->regionModels)) {
            Model::validateArray($this->regionModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionModels) {
            if (\is_array($this->regionModels)) {
                $res['RegionModels'] = [];
                $n1 = 0;
                foreach ($this->regionModels as $item1) {
                    $res['RegionModels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RegionModels'])) {
            if (!empty($map['RegionModels'])) {
                $model->regionModels = [];
                $n1 = 0;
                foreach ($map['RegionModels'] as $item1) {
                    $model->regionModels[$n1++] = regionModels::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
