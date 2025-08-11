<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\BatchAddFeishuUsersResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\BatchAddFeishuUsersResponseBody\result\failResults\failInfos;

class failResults extends Model
{
    /**
     * @var failInfos[]
     */
    public $failInfos;
    protected $_name = [
        'failInfos' => 'FailInfos',
    ];

    public function validate()
    {
        if (\is_array($this->failInfos)) {
            Model::validateArray($this->failInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failInfos) {
            if (\is_array($this->failInfos)) {
                $res['FailInfos'] = [];
                $n1 = 0;
                foreach ($this->failInfos as $item1) {
                    $res['FailInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FailInfos'])) {
            if (!empty($map['FailInfos'])) {
                $model->failInfos = [];
                $n1 = 0;
                foreach ($map['FailInfos'] as $item1) {
                    $model->failInfos[$n1] = failInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
