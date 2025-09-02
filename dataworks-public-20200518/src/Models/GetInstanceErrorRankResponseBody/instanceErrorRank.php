<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceErrorRankResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceErrorRankResponseBody\instanceErrorRank\errorRank;

class instanceErrorRank extends Model
{
    /**
     * @var errorRank[]
     */
    public $errorRank;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'errorRank' => 'ErrorRank',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->errorRank)) {
            Model::validateArray($this->errorRank);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorRank) {
            if (\is_array($this->errorRank)) {
                $res['ErrorRank'] = [];
                $n1 = 0;
                foreach ($this->errorRank as $item1) {
                    $res['ErrorRank'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['ErrorRank'])) {
            if (!empty($map['ErrorRank'])) {
                $model->errorRank = [];
                $n1 = 0;
                foreach ($map['ErrorRank'] as $item1) {
                    $model->errorRank[$n1] = errorRank::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
