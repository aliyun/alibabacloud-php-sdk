<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\BatchAddFeishuUsersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\BatchAddFeishuUsersResponseBody\result\failResults;

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
        'failCount' => 'FailCount',
        'failResults' => 'FailResults',
        'okCount' => 'OkCount',
    ];

    public function validate()
    {
        if (\is_array($this->failResults)) {
            Model::validateArray($this->failResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }

        if (null !== $this->failResults) {
            if (\is_array($this->failResults)) {
                $res['FailResults'] = [];
                $n1 = 0;
                foreach ($this->failResults as $item1) {
                    $res['FailResults'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->okCount) {
            $res['OkCount'] = $this->okCount;
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
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }

        if (isset($map['FailResults'])) {
            if (!empty($map['FailResults'])) {
                $model->failResults = [];
                $n1 = 0;
                foreach ($map['FailResults'] as $item1) {
                    $model->failResults[$n1++] = failResults::fromMap($item1);
                }
            }
        }

        if (isset($map['OkCount'])) {
            $model->okCount = $map['OkCount'];
        }

        return $model;
    }
}
