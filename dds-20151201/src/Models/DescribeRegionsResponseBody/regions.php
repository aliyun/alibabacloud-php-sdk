<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRegionsResponseBody\regions\ddsRegion;

class regions extends Model
{
    /**
     * @var ddsRegion[]
     */
    public $ddsRegion;
    protected $_name = [
        'ddsRegion' => 'DdsRegion',
    ];

    public function validate()
    {
        if (\is_array($this->ddsRegion)) {
            Model::validateArray($this->ddsRegion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ddsRegion) {
            if (\is_array($this->ddsRegion)) {
                $res['DdsRegion'] = [];
                $n1 = 0;
                foreach ($this->ddsRegion as $item1) {
                    $res['DdsRegion'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['DdsRegion'])) {
            if (!empty($map['DdsRegion'])) {
                $model->ddsRegion = [];
                $n1 = 0;
                foreach ($map['DdsRegion'] as $item1) {
                    $model->ddsRegion[$n1] = ddsRegion::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
