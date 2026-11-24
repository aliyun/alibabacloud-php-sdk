<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DeleteCostRuleResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $affectedModelApiIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'affectedModelApiIds' => 'AffectedModelApiIds',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->affectedModelApiIds)) {
            Model::validateArray($this->affectedModelApiIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affectedModelApiIds) {
            if (\is_array($this->affectedModelApiIds)) {
                $res['AffectedModelApiIds'] = [];
                $n1 = 0;
                foreach ($this->affectedModelApiIds as $item1) {
                    $res['AffectedModelApiIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['AffectedModelApiIds'])) {
            if (!empty($map['AffectedModelApiIds'])) {
                $model->affectedModelApiIds = [];
                $n1 = 0;
                foreach ($map['AffectedModelApiIds'] as $item1) {
                    $model->affectedModelApiIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
