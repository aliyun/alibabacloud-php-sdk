<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\AddAuthResourceRequest;

use AlibabaCloud\Tea\Model;

class authResourceHeaderList extends Model
{
    /**
     * @description The parameter of the HTTP header.
     *
     * @example Access-Control-Allow-Origin
     *
     * @var string
     */
    public $headerKey;

    /**
     * @description The header matching mode.
     *
     * Valid values:
     *
     *   SUFFIX
     *
     * <!-- -->
     *
     *   EXIST
     *
     * <!-- -->
     *
     *   PREFIX
     *
     * <!-- -->
     *
     *   EQUAL
     *
     * <!-- -->
     *
     *   EXCLUDE
     *
     * <!-- -->
     *
     *   NOT_EQUAL
     *
     * <!-- -->
     *
     *   NOT_EXIST
     *
     * <!-- -->
     *
     *   REGREX
     *
     * <!-- -->
     *
     *   INCLUDE
     *
     * <!-- -->
     * @example EQUAL
     *
     * @var string
     */
    public $headerMethod;

    /**
     * @description The parameter value of the HTTP header.
     *
     * @example *
     *
     * @var string
     */
    public $headerValue;
    protected $_name = [
        'headerKey'    => 'HeaderKey',
        'headerMethod' => 'HeaderMethod',
        'headerValue'  => 'HeaderValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->headerKey) {
            $res['HeaderKey'] = $this->headerKey;
        }
        if (null !== $this->headerMethod) {
            $res['HeaderMethod'] = $this->headerMethod;
        }
        if (null !== $this->headerValue) {
            $res['HeaderValue'] = $this->headerValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authResourceHeaderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HeaderKey'])) {
            $model->headerKey = $map['HeaderKey'];
        }
        if (isset($map['HeaderMethod'])) {
            $model->headerMethod = $map['HeaderMethod'];
        }
        if (isset($map['HeaderValue'])) {
            $model->headerValue = $map['HeaderValue'];
        }

        return $model;
    }
}
