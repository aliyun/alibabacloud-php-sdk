<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListLaunchOptionsResponseBody;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListLaunchOptionsResponseBody\launchOptionSummaries\constraintSummaries;
use AlibabaCloud\Tea\Model;

class launchOptionSummaries extends Model
{
    /**
     * @description The constraints.
     *
     * @var constraintSummaries[]
     */
    public $constraintSummaries;

    /**
     * @description The ID of the product portfolio.
     *
     * @example port-bp1yt7582g****
     *
     * @var string
     */
    public $portfolioId;

    /**
     * @description The name of the product portfolio.
     *
     * @example DEMO-IT services
     *
     * @var string
     */
    public $portfolioName;
    protected $_name = [
        'constraintSummaries' => 'ConstraintSummaries',
        'portfolioId'         => 'PortfolioId',
        'portfolioName'       => 'PortfolioName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->constraintSummaries) {
            $res['ConstraintSummaries'] = [];
            if (null !== $this->constraintSummaries && \is_array($this->constraintSummaries)) {
                $n = 0;
                foreach ($this->constraintSummaries as $item) {
                    $res['ConstraintSummaries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->portfolioId) {
            $res['PortfolioId'] = $this->portfolioId;
        }
        if (null !== $this->portfolioName) {
            $res['PortfolioName'] = $this->portfolioName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchOptionSummaries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConstraintSummaries'])) {
            if (!empty($map['ConstraintSummaries'])) {
                $model->constraintSummaries = [];
                $n                          = 0;
                foreach ($map['ConstraintSummaries'] as $item) {
                    $model->constraintSummaries[$n++] = null !== $item ? constraintSummaries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PortfolioId'])) {
            $model->portfolioId = $map['PortfolioId'];
        }
        if (isset($map['PortfolioName'])) {
            $model->portfolioName = $map['PortfolioName'];
        }

        return $model;
    }
}
