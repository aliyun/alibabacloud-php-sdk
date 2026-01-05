<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductPlanApproversRequest\filters;

class ListProvisionedProductPlanApproversRequest extends Model
{
    /**
     * @var string
     */
    public $accessLevelFilter;

    /**
     * @var string
     */
    public $approvalFilter;

    /**
     * @var filters[]
     */
    public $filters;
    protected $_name = [
        'accessLevelFilter' => 'AccessLevelFilter',
        'approvalFilter' => 'ApprovalFilter',
        'filters' => 'Filters',
    ];

    public function validate()
    {
        if (\is_array($this->filters)) {
            Model::validateArray($this->filters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessLevelFilter) {
            $res['AccessLevelFilter'] = $this->accessLevelFilter;
        }

        if (null !== $this->approvalFilter) {
            $res['ApprovalFilter'] = $this->approvalFilter;
        }

        if (null !== $this->filters) {
            if (\is_array($this->filters)) {
                $res['Filters'] = [];
                $n1 = 0;
                foreach ($this->filters as $item1) {
                    $res['Filters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccessLevelFilter'])) {
            $model->accessLevelFilter = $map['AccessLevelFilter'];
        }

        if (isset($map['ApprovalFilter'])) {
            $model->approvalFilter = $map['ApprovalFilter'];
        }

        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n1 = 0;
                foreach ($map['Filters'] as $item1) {
                    $model->filters[$n1] = filters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
