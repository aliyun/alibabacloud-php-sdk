<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DeleteRouteEntriesResponseBody\failedRouteEntries;

class DeleteRouteEntriesResponseBody extends Model
{
    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var failedRouteEntries[]
     */
    public $failedRouteEntries;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $successCount;
    protected $_name = [
        'failedCount' => 'FailedCount',
        'failedRouteEntries' => 'FailedRouteEntries',
        'requestId' => 'RequestId',
        'successCount' => 'SuccessCount',
    ];

    public function validate()
    {
        if (\is_array($this->failedRouteEntries)) {
            Model::validateArray($this->failedRouteEntries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }

        if (null !== $this->failedRouteEntries) {
            if (\is_array($this->failedRouteEntries)) {
                $res['FailedRouteEntries'] = [];
                $n1 = 0;
                foreach ($this->failedRouteEntries as $item1) {
                    $res['FailedRouteEntries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
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
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }

        if (isset($map['FailedRouteEntries'])) {
            if (!empty($map['FailedRouteEntries'])) {
                $model->failedRouteEntries = [];
                $n1 = 0;
                foreach ($map['FailedRouteEntries'] as $item1) {
                    $model->failedRouteEntries[$n1++] = failedRouteEntries::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}
