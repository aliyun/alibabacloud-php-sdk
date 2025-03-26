<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRegionsResponseBody\regions\RDSRegion;

class regions extends Model
{
    /**
     * @var RDSRegion[]
     */
    public $RDSRegion;
    protected $_name = [
        'RDSRegion' => 'RDSRegion',
    ];

    public function validate()
    {
        if (\is_array($this->RDSRegion)) {
            Model::validateArray($this->RDSRegion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->RDSRegion) {
            if (\is_array($this->RDSRegion)) {
                $res['RDSRegion'] = [];
                $n1 = 0;
                foreach ($this->RDSRegion as $item1) {
                    $res['RDSRegion'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RDSRegion'])) {
            if (!empty($map['RDSRegion'])) {
                $model->RDSRegion = [];
                $n1 = 0;
                foreach ($map['RDSRegion'] as $item1) {
                    $model->RDSRegion[$n1++] = RDSRegion::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
