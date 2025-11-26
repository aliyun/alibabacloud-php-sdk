<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponseBody\distResults\distResult;

class distResults extends Model
{
    /**
     * @var distResult[]
     */
    public $distResult;
    protected $_name = [
        'distResult' => 'DistResult',
    ];

    public function validate()
    {
        if (\is_array($this->distResult)) {
            Model::validateArray($this->distResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->distResult) {
            if (\is_array($this->distResult)) {
                $res['DistResult'] = [];
                $n1 = 0;
                foreach ($this->distResult as $item1) {
                    $res['DistResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DistResult'])) {
            if (!empty($map['DistResult'])) {
                $model->distResult = [];
                $n1 = 0;
                foreach ($map['DistResult'] as $item1) {
                    $model->distResult[$n1] = distResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
