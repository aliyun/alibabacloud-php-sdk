<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListPlansResponseBody\plans;
use AlibabaCloud\Tea\Model;

class ListPlansResponseBody extends Model
{
    /**
     * @var plans[]
     */
    public $plans;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'plans'     => 'Plans',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->plans) {
            $res['Plans'] = [];
            if (null !== $this->plans && \is_array($this->plans)) {
                $n = 0;
                foreach ($this->plans as $item) {
                    $res['Plans'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPlansResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Plans'])) {
            if (!empty($map['Plans'])) {
                $model->plans = [];
                $n            = 0;
                foreach ($map['Plans'] as $item) {
                    $model->plans[$n++] = null !== $item ? plans::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
