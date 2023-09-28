<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetPortfolioResponseBody;

use AlibabaCloud\Tea\Model;

class portfolioDetail extends Model
{
    /**
     * @description The time when the product portfolio was created.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     * @example 2022-04-12T06:11:12Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the product portfolio.
     *
     * @example The description of the product portfolio.
     *
     * @var string
     */
    public $description;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the product portfolio.
     *
     * @example acs:servicecatalog:cn-hangzhou:146611588617****:portfolio/port-bp1yt7582g****
     *
     * @var string
     */
    public $portfolioArn;

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

    /**
     * @description The provider of the product portfolio.
     *
     * @example IT team
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
     * @return portfolioDetail
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
