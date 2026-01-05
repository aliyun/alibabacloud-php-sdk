<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;

class AssociatePrincipalWithPortfolioRequest extends Model
{
    /**
     * @var string
     */
    public $portfolioId;

    /**
     * @var string
     */
    public $principalId;

    /**
     * @var string
     */
    public $principalType;
    protected $_name = [
        'portfolioId' => 'PortfolioId',
        'principalId' => 'PrincipalId',
        'principalType' => 'PrincipalType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
