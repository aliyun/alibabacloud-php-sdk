<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class AssociatePrincipalWithPortfolioRequest extends Model
{
    /**
     * @example port-bp1yt7582g****
     *
     * @var string
     */
    public $portfolioId;

    /**
     * @example 24477111603637****
     *
     * @var string
     */
    public $principalId;

    /**
     * @example RamUser
     *
     * @var string
     */
    public $principalType;
    protected $_name = [
        'portfolioId'   => 'PortfolioId',
        'principalId'   => 'PrincipalId',
        'principalType' => 'PrincipalType',
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
        if (null !== $this->principalId) {
            $res['PrincipalId'] = $this->principalId;
        }
        if (null !== $this->principalType) {
            $res['PrincipalType'] = $this->principalType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociatePrincipalWithPortfolioRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PortfolioId'])) {
            $model->portfolioId = $map['PortfolioId'];
        }
        if (isset($map['PrincipalId'])) {
            $model->principalId = $map['PrincipalId'];
        }
        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
        }

        return $model;
    }
}
