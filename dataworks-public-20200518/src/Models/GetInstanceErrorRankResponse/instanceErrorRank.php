<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceErrorRankResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceErrorRankResponse\instanceErrorRank\errorRank;
use AlibabaCloud\Tea\Model;

class instanceErrorRank extends Model
{
    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var errorRank[]
     */
    public $errorRank;
    protected $_name = [
        'updateTime' => 'UpdateTime',
        'errorRank'  => 'ErrorRank',
    ];

    public function validate()
    {
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('errorRank', $this->errorRank, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->errorRank) {
            $res['ErrorRank'] = [];
            if (null !== $this->errorRank && \is_array($this->errorRank)) {
                $n = 0;
                foreach ($this->errorRank as $item) {
                    $res['ErrorRank'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ErrorRank'])) {
            if (!empty($map['ErrorRank'])) {
                $model->errorRank = [];
                $n                = 0;
                foreach ($map['ErrorRank'] as $item) {
                    $model->errorRank[$n++] = null !== $item ? errorRank::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
