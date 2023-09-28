<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class UpdatePortfolioRequest extends Model
{
    /**
     * @description 产品组合描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @example port-bp1yt7582g****
     *
     * @var string
     */
    public $portfolioId;

    /**
     * @description 代表资源名称的资源属性字段
     *
     * @var string
     */
    public $portfolioName;

    /**
     * @description 产品组合提供方
     *
     * @var string
     */
    public $providerName;
    protected $_name = [
        'description'   => 'Description',
        'portfolioId'   => 'PortfolioId',
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
        if (null !== $this->portfolioId) {
            $res['PortfolioId'] = $this->portfolioId;
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
     * @return UpdatePortfolioRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PortfolioId'])) {
            $model->portfolioId = $map['PortfolioId'];
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
