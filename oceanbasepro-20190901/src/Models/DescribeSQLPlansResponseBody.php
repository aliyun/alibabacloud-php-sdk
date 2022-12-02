<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLPlansResponseBody\SQLPlans;
use AlibabaCloud\Tea\Model;

class DescribeSQLPlansResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SQLPlans[]
     */
    public $SQLPlans;
    protected $_name = [
        'requestId' => 'RequestId',
        'SQLPlans'  => 'SQLPlans',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->SQLPlans) {
            $res['SQLPlans'] = [];
            if (null !== $this->SQLPlans && \is_array($this->SQLPlans)) {
                $n = 0;
                foreach ($this->SQLPlans as $item) {
                    $res['SQLPlans'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQLPlansResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SQLPlans'])) {
            if (!empty($map['SQLPlans'])) {
                $model->SQLPlans = [];
                $n               = 0;
                foreach ($map['SQLPlans'] as $item) {
                    $model->SQLPlans[$n++] = null !== $item ? SQLPlans::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
