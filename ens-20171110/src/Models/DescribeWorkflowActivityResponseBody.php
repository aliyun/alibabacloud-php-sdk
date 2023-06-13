<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeWorkflowActivityResponseBody\activityInfo;
use AlibabaCloud\Tea\Model;

class DescribeWorkflowActivityResponseBody extends Model
{
    /**
     * @var activityInfo[]
     */
    public $activityInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'activityInfo' => 'ActivityInfo',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityInfo) {
            $res['ActivityInfo'] = [];
            if (null !== $this->activityInfo && \is_array($this->activityInfo)) {
                $n = 0;
                foreach ($this->activityInfo as $item) {
                    $res['ActivityInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeWorkflowActivityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityInfo'])) {
            if (!empty($map['ActivityInfo'])) {
                $model->activityInfo = [];
                $n                   = 0;
                foreach ($map['ActivityInfo'] as $item) {
                    $model->activityInfo[$n++] = null !== $item ? activityInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
