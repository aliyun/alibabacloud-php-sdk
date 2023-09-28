<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetPortfolioResponseBody\portfolioDetail;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetPortfolioResponseBody\tagOptions;
use AlibabaCloud\Tea\Model;

class GetPortfolioResponseBody extends Model
{
    /**
     * @description The details of the product portfolio.
     *
     * @var portfolioDetail
     */
    public $portfolioDetail;

    /**
     * @description The ID of the request.
     *
     * @example 0FEEF92D-4052-5202-87D0-3D8EC16F81BF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The tag options associated with the service portfolio.
     *
     * @var tagOptions[]
     */
    public $tagOptions;
    protected $_name = [
        'portfolioDetail' => 'PortfolioDetail',
        'requestId'       => 'RequestId',
        'tagOptions'      => 'TagOptions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->portfolioDetail) {
            $res['PortfolioDetail'] = null !== $this->portfolioDetail ? $this->portfolioDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tagOptions) {
            $res['TagOptions'] = [];
            if (null !== $this->tagOptions && \is_array($this->tagOptions)) {
                $n = 0;
                foreach ($this->tagOptions as $item) {
                    $res['TagOptions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPortfolioResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PortfolioDetail'])) {
            $model->portfolioDetail = portfolioDetail::fromMap($map['PortfolioDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TagOptions'])) {
            if (!empty($map['TagOptions'])) {
                $model->tagOptions = [];
                $n                 = 0;
                foreach ($map['TagOptions'] as $item) {
                    $model->tagOptions[$n++] = null !== $item ? tagOptions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
