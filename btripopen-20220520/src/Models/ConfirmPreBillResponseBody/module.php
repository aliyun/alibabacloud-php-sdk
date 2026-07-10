<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ConfirmPreBillResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ConfirmPreBillResponseBody\module\forbidUpdateDetail;

class module extends Model
{
    /**
     * @var int
     */
    public $batchId;

    /**
     * @var int
     */
    public $forbidUpdateBillCount;

    /**
     * @var forbidUpdateDetail[]
     */
    public $forbidUpdateDetail;

    /**
     * @var int
     */
    public $matchCount;

    /**
     * @var int
     */
    public $notMatchCount;

    /**
     * @var string[]
     */
    public $notMatchDetail;
    protected $_name = [
        'batchId' => 'batch_id',
        'forbidUpdateBillCount' => 'forbid_update_bill_count',
        'forbidUpdateDetail' => 'forbid_update_detail',
        'matchCount' => 'match_count',
        'notMatchCount' => 'not_match_count',
        'notMatchDetail' => 'not_match_detail',
    ];

    public function validate()
    {
        if (\is_array($this->forbidUpdateDetail)) {
            Model::validateArray($this->forbidUpdateDetail);
        }
        if (\is_array($this->notMatchDetail)) {
            Model::validateArray($this->notMatchDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['batch_id'] = $this->batchId;
        }

        if (null !== $this->forbidUpdateBillCount) {
            $res['forbid_update_bill_count'] = $this->forbidUpdateBillCount;
        }

        if (null !== $this->forbidUpdateDetail) {
            if (\is_array($this->forbidUpdateDetail)) {
                $res['forbid_update_detail'] = [];
                $n1 = 0;
                foreach ($this->forbidUpdateDetail as $item1) {
                    $res['forbid_update_detail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->matchCount) {
            $res['match_count'] = $this->matchCount;
        }

        if (null !== $this->notMatchCount) {
            $res['not_match_count'] = $this->notMatchCount;
        }

        if (null !== $this->notMatchDetail) {
            if (\is_array($this->notMatchDetail)) {
                $res['not_match_detail'] = [];
                $n1 = 0;
                foreach ($this->notMatchDetail as $item1) {
                    $res['not_match_detail'][$n1] = $item1;
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
        if (isset($map['batch_id'])) {
            $model->batchId = $map['batch_id'];
        }

        if (isset($map['forbid_update_bill_count'])) {
            $model->forbidUpdateBillCount = $map['forbid_update_bill_count'];
        }

        if (isset($map['forbid_update_detail'])) {
            if (!empty($map['forbid_update_detail'])) {
                $model->forbidUpdateDetail = [];
                $n1 = 0;
                foreach ($map['forbid_update_detail'] as $item1) {
                    $model->forbidUpdateDetail[$n1] = forbidUpdateDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['match_count'])) {
            $model->matchCount = $map['match_count'];
        }

        if (isset($map['not_match_count'])) {
            $model->notMatchCount = $map['not_match_count'];
        }

        if (isset($map['not_match_detail'])) {
            if (!empty($map['not_match_detail'])) {
                $model->notMatchDetail = [];
                $n1 = 0;
                foreach ($map['not_match_detail'] as $item1) {
                    $model->notMatchDetail[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
