<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListPortfoliosResponseBody;

use AlibabaCloud\Tea\Model;

class portfolioDetails extends Model
{
    /**
     * @description 代表创建时间的资源属性字段
     *
     * @example 2022-04-12T06:11:12Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 产品组合描述
     *
     * @var string
     */
    public $description;

    /**
     * @example acs:servicecatalog:cn-hangzhou:146611588617****:portfolio/port-bp1yt7582g****
     *
     * @var string
     */
    public $portfolioArn;

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
        'createTime'    => 'CreateTime',
        'description'   => 'Description',
        'portfolioArn'  => 'PortfolioArn',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->portfolioArn) {
            $res['PortfolioArn'] = $this->portfolioArn;
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
     * @return portfolioDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PortfolioArn'])) {
            $model->portfolioArn = $map['PortfolioArn'];
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
