<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ListGatewayIsolationRuleRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description just for POP
     *
     * This parameter is required.
     * @example param
     *
     * @var string
     */
    public $filterParams;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'filterParams'   => 'FilterParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->filterParams) {
            $res['FilterParams'] = $this->filterParams;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGatewayIsolationRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['FilterParams'])) {
            $model->filterParams = $map['FilterParams'];
        }

        return $model;
    }
}
