<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponse;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponse\distResults\distResult;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('distResult', $this->distResult, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->distResult) {
            $res['DistResult'] = [];
            if (null !== $this->distResult && \is_array($this->distResult)) {
                $n = 0;
                foreach ($this->distResult as $item) {
                    $res['DistResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return distResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistResult'])) {
            if (!empty($map['DistResult'])) {
                $model->distResult = [];
                $n                 = 0;
                foreach ($map['DistResult'] as $item) {
                    $model->distResult[$n++] = null !== $item ? distResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
