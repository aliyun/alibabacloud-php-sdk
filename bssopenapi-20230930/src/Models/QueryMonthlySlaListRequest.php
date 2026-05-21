<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryMonthlySlaListRequest\ecIdAccountIds;

class QueryMonthlySlaListRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var ecIdAccountIds[]
     */
    public $ecIdAccountIds;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var int[]
     */
    public $months;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int[]
     */
    public $payStatuses;

    /**
     * @var string[]
     */
    public $productCodes;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'ecIdAccountIds' => 'EcIdAccountIds',
        'instanceIds' => 'InstanceIds',
        'months' => 'Months',
        'nbid' => 'Nbid',
        'pageSize' => 'PageSize',
        'payStatuses' => 'PayStatuses',
        'productCodes' => 'ProductCodes',
    ];

    public function validate()
    {
        if (\is_array($this->ecIdAccountIds)) {
            Model::validateArray($this->ecIdAccountIds);
        }
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->months)) {
            Model::validateArray($this->months);
        }
        if (\is_array($this->payStatuses)) {
            Model::validateArray($this->payStatuses);
        }
        if (\is_array($this->productCodes)) {
            Model::validateArray($this->productCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
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

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->months) {
            if (\is_array($this->months)) {
                $res['Months'] = [];
                $n1 = 0;
                foreach ($this->months as $item1) {
                    $res['Months'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->payStatuses) {
            if (\is_array($this->payStatuses)) {
                $res['PayStatuses'] = [];
                $n1 = 0;
                foreach ($this->payStatuses as $item1) {
                    $res['PayStatuses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->productCodes) {
            if (\is_array($this->productCodes)) {
                $res['ProductCodes'] = [];
                $n1 = 0;
                foreach ($this->productCodes as $item1) {
                    $res['ProductCodes'][$n1] = $item1;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
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

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Months'])) {
            if (!empty($map['Months'])) {
                $model->months = [];
                $n1 = 0;
                foreach ($map['Months'] as $item1) {
                    $model->months[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PayStatuses'])) {
            if (!empty($map['PayStatuses'])) {
                $model->payStatuses = [];
                $n1 = 0;
                foreach ($map['PayStatuses'] as $item1) {
                    $model->payStatuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProductCodes'])) {
            if (!empty($map['ProductCodes'])) {
                $model->productCodes = [];
                $n1 = 0;
                foreach ($map['ProductCodes'] as $item1) {
                    $model->productCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
