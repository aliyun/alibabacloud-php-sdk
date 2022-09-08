<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\BatchAddFeishuUsersResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\BatchAddFeishuUsersResponseBody\result\failResults;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $failCount;

    /**
     * @var failResults[]
     */
    public $failResults;

    /**
     * @var int
     */
    public $okCount;
    protected $_name = [
        'failCount'   => 'FailCount',
        'failResults' => 'FailResults',
        'okCount'     => 'OkCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->failResults) {
            $res['FailResults'] = [];
            if (null !== $this->failResults && \is_array($this->failResults)) {
                $n = 0;
                foreach ($this->failResults as $item) {
                    $res['FailResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->okCount) {
            $res['OkCount'] = $this->okCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['FailResults'])) {
            if (!empty($map['FailResults'])) {
                $model->failResults = [];
                $n                  = 0;
                foreach ($map['FailResults'] as $item) {
                    $model->failResults[$n++] = null !== $item ? failResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OkCount'])) {
            $model->okCount = $map['OkCount'];
        }

        return $model;
    }
}
