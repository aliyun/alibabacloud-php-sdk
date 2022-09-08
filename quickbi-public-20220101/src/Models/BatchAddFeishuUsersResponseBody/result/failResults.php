<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\BatchAddFeishuUsersResponseBody\result;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\BatchAddFeishuUsersResponseBody\result\failResults\failInfos;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failInfos) {
            $res['FailInfos'] = [];
            if (null !== $this->failInfos && \is_array($this->failInfos)) {
                $n = 0;
                foreach ($this->failInfos as $item) {
                    $res['FailInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailInfos'])) {
            if (!empty($map['FailInfos'])) {
                $model->failInfos = [];
                $n                = 0;
                foreach ($map['FailInfos'] as $item) {
                    $model->failInfos[$n++] = null !== $item ? failInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
