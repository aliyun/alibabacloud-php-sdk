<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TopTenErrorTimesInstanceResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TopTenErrorTimesInstanceResponseBody\instanceErrorRank\errorRank;
use AlibabaCloud\Tea\Model;

class instanceErrorRank extends Model
{
    /**
     * @description The ranking of nodes on which errors occur within the last month.
     *
     * @var errorRank[]
     */
    public $errorRank;

    /**
     * @description The time when the ranking was updated.
     *
     * @example 1600963200000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'errorRank'  => 'ErrorRank',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorRank) {
            $res['ErrorRank'] = [];
            if (null !== $this->errorRank && \is_array($this->errorRank)) {
                $n = 0;
                foreach ($this->errorRank as $item) {
                    $res['ErrorRank'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceErrorRank
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorRank'])) {
            if (!empty($map['ErrorRank'])) {
                $model->errorRank = [];
                $n                = 0;
                foreach ($map['ErrorRank'] as $item) {
                    $model->errorRank[$n++] = null !== $item ? errorRank::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
