<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class ListPrincipalsRequest extends Model
{
    /**
     * @description The ID of the product portfolio.
     *
     * @example port-bp1yt7582g****
     *
     * @var string
     */
    public $portfolioId;
    protected $_name = [
        'portfolioId' => 'PortfolioId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->portfolioId) {
            $res['PortfolioId'] = $this->portfolioId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPrincipalsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PortfolioId'])) {
            $model->portfolioId = $map['PortfolioId'];
        }

        return $model;
    }
}
