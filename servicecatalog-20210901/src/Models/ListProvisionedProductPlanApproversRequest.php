<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductPlanApproversRequest\filters;
use AlibabaCloud\Tea\Model;

class ListProvisionedProductPlanApproversRequest extends Model
{
    /**
     * @description The access filter. Valid values:
     *
     *   User (default): queries the plans that are created by the current requester.
     *   Account: queries the plans that belong to the current Alibaba Cloud account.
     *   ResourceDirectory: queries the plans that belong to the current resource directory.
     *
     * >  You must specify one of the `ApprovalFilter` and `AccessLevelFilter` parameters, but not both.
     * @example User
     *
     * @var string
     */
    public $accessLevelFilter;

    /**
     * @description The access filter of the review dimension. Valid values:
     *
     *   AccountRequests: queries all reviewed plans that belong to the current Alibaba Cloud account.
     *   ResourceDirectoryRequests: queries all plans that belong to the current resource directory.
     *
     * >  You must specify one of the `ApprovalFilter` and `AccessLevelFilter` parameters, but not both.
     * @example AccountRequests
     *
     * @var string
     */
    public $approvalFilter;

    /**
     * @description An array that consists of filter conditions.
     *
     * @var filters[]
     */
    public $filters;
    protected $_name = [
        'accessLevelFilter' => 'AccessLevelFilter',
        'approvalFilter'    => 'ApprovalFilter',
        'filters'           => 'Filters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLevelFilter) {
            $res['AccessLevelFilter'] = $this->accessLevelFilter;
        }
        if (null !== $this->approvalFilter) {
            $res['ApprovalFilter'] = $this->approvalFilter;
        }
        if (null !== $this->filters) {
            $res['Filters'] = [];
            if (null !== $this->filters && \is_array($this->filters)) {
                $n = 0;
                foreach ($this->filters as $item) {
                    $res['Filters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProvisionedProductPlanApproversRequest
     */
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
                $n              = 0;
                foreach ($map['Filters'] as $item) {
                    $model->filters[$n++] = null !== $item ? filters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
