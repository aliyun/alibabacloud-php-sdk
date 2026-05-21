<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SubmitSlaCouponApplyRequest\ecIdAccountIds;

class SubmitSlaCouponApplyRequest extends Model
{
    /**
     * @var string[]
     */
    public $damagedIds;

    /**
     * @var ecIdAccountIds[]
     */
    public $ecIdAccountIds;

    /**
     * @var int
     */
    public $month;

    /**
     * @var string
     */
    public $nbid;
    protected $_name = [
        'damagedIds' => 'DamagedIds',
        'ecIdAccountIds' => 'EcIdAccountIds',
        'month' => 'Month',
        'nbid' => 'Nbid',
    ];

    public function validate()
    {
        if (\is_array($this->damagedIds)) {
            Model::validateArray($this->damagedIds);
        }
        if (\is_array($this->ecIdAccountIds)) {
            Model::validateArray($this->ecIdAccountIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->damagedIds) {
            if (\is_array($this->damagedIds)) {
                $res['DamagedIds'] = [];
                $n1 = 0;
                foreach ($this->damagedIds as $item1) {
                    $res['DamagedIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ecIdAccountIds) {
            if (\is_array($this->ecIdAccountIds)) {
                $res['EcIdAccountIds'] = [];
                $n1 = 0;
                foreach ($this->ecIdAccountIds as $item1) {
                    $res['EcIdAccountIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->month) {
            $res['Month'] = $this->month;
        }

        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
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
        if (isset($map['DamagedIds'])) {
            if (!empty($map['DamagedIds'])) {
                $model->damagedIds = [];
                $n1 = 0;
                foreach ($map['DamagedIds'] as $item1) {
                    $model->damagedIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EcIdAccountIds'])) {
            if (!empty($map['EcIdAccountIds'])) {
                $model->ecIdAccountIds = [];
                $n1 = 0;
                foreach ($map['EcIdAccountIds'] as $item1) {
                    $model->ecIdAccountIds[$n1] = ecIdAccountIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Month'])) {
            $model->month = $map['Month'];
        }

        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        return $model;
    }
}
