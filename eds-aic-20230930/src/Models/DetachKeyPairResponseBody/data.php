<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DetachKeyPairResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $detachedInstanceIds;

    /**
     * @var int
     */
    public $failCount;

    /**
     * @var string
     */
    public $keyPairId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'detachedInstanceIds' => 'DetachedInstanceIds',
        'failCount' => 'FailCount',
        'keyPairId' => 'KeyPairId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->detachedInstanceIds)) {
            Model::validateArray($this->detachedInstanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detachedInstanceIds) {
            if (\is_array($this->detachedInstanceIds)) {
                $res['DetachedInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->detachedInstanceIds as $item1) {
                    $res['DetachedInstanceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }

        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['DetachedInstanceIds'])) {
            if (!empty($map['DetachedInstanceIds'])) {
                $model->detachedInstanceIds = [];
                $n1 = 0;
                foreach ($map['DetachedInstanceIds'] as $item1) {
                    $model->detachedInstanceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }

        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
