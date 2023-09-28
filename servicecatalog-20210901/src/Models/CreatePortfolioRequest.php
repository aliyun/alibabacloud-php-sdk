<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class CreatePortfolioRequest extends Model
{
    /**
     * @description The description of the product portfolio.
     *
     * The value must be 1 to 128 characters in length.
     * @example The description of the product portfolio.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the product portfolio.
     *
     * The value must be 1 to 128 characters in length.
     * @example DEMO-IT services
     *
     * @var string
     */
    public $portfolioName;

    /**
     * @description The provider of the product portfolio.
     *
     * The value must be 1 to 128 characters in length.
     * @example IT team
     *
     * @var string
     */
    public $providerName;
    protected $_name = [
        'description'   => 'Description',
        'portfolioName' => 'PortfolioName',
        'providerName'  => 'ProviderName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->portfolioName) {
            $res['PortfolioName'] = $this->portfolioName;
        }
        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePortfolioRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PortfolioName'])) {
            $model->portfolioName = $map['PortfolioName'];
        }
        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }

        return $model;
    }
}
