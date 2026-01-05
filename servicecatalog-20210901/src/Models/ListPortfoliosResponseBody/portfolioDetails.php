<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListPortfoliosResponseBody;

use AlibabaCloud\Dara\Model;

class portfolioDetails extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $portfolioArn;

    /**
     * @var string
     */
    public $portfolioId;

    /**
     * @var string
     */
    public $portfolioName;

    /**
     * @var string
     */
    public $providerName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'portfolioArn' => 'PortfolioArn',
        'portfolioId' => 'PortfolioId',
        'portfolioName' => 'PortfolioName',
        'providerName' => 'ProviderName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
