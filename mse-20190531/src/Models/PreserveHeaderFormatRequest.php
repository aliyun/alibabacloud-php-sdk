<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class PreserveHeaderFormatRequest extends Model
{
    /**
     * @description The language in which you want to display the results. Valid values: zh and en. zh indicates Chinese, which is the default value. en indicates English.
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The unique ID of the gateway.
     *
     * This parameter is required.
     * @example gw-3f97e2989c344f35ab3fd62b19f1****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description Specifies whether the request header is case-sensitive. Valid values:
     *
     *   **true**
     *   **false**
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $preserveHeaderFormat;
    protected $_name = [
        'acceptLanguage'       => 'AcceptLanguage',
        'gatewayUniqueId'      => 'GatewayUniqueId',
        'preserveHeaderFormat' => 'PreserveHeaderFormat',
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
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->preserveHeaderFormat) {
            $res['PreserveHeaderFormat'] = $this->preserveHeaderFormat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreserveHeaderFormatRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['PreserveHeaderFormat'])) {
            $model->preserveHeaderFormat = $map['PreserveHeaderFormat'];
        }

        return $model;
    }
}
