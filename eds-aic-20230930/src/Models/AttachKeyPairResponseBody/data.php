<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\AttachKeyPairResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $attachedInstanceIds;

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
        'attachedInstanceIds' => 'AttachedInstanceIds',
        'failCount' => 'FailCount',
        'keyPairId' => 'KeyPairId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->attachedInstanceIds)) {
            Model::validateArray($this->attachedInstanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachedInstanceIds) {
            if (\is_array($this->attachedInstanceIds)) {
                $res['AttachedInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->attachedInstanceIds as $item1) {
                    $res['AttachedInstanceIds'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['AttachedInstanceIds'])) {
            if (!empty($map['AttachedInstanceIds'])) {
                $model->attachedInstanceIds = [];
                $n1 = 0;
                foreach ($map['AttachedInstanceIds'] as $item1) {
                    $model->attachedInstanceIds[$n1] = $item1;
                    ++$n1;
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
