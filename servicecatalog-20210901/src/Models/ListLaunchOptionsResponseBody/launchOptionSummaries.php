<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListLaunchOptionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListLaunchOptionsResponseBody\launchOptionSummaries\constraintSummaries;

class launchOptionSummaries extends Model
{
    /**
     * @var constraintSummaries[]
     */
    public $constraintSummaries;

    /**
     * @var string
     */
    public $portfolioId;

    /**
     * @var string
     */
    public $portfolioName;
    protected $_name = [
        'constraintSummaries' => 'ConstraintSummaries',
        'portfolioId' => 'PortfolioId',
        'portfolioName' => 'PortfolioName',
    ];

    public function validate()
    {
        if (\is_array($this->constraintSummaries)) {
            Model::validateArray($this->constraintSummaries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->constraintSummaries) {
            if (\is_array($this->constraintSummaries)) {
                $res['ConstraintSummaries'] = [];
                $n1 = 0;
                foreach ($this->constraintSummaries as $item1) {
                    $res['ConstraintSummaries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConstraintSummaries'])) {
            if (!empty($map['ConstraintSummaries'])) {
                $model->constraintSummaries = [];
                $n1 = 0;
                foreach ($map['ConstraintSummaries'] as $item1) {
                    $model->constraintSummaries[$n1] = constraintSummaries::fromMap($item1);
                    ++$n1;
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
