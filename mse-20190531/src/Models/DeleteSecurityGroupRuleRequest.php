<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class DeleteSecurityGroupRuleRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var bool
     */
    public $cascadingDelete;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-83b0ddb569434f82b9fe8e4c60c40f7c
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The destination ID.
     *
     * @example 93
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'cascadingDelete' => 'CascadingDelete',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'id' => 'Id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->cascadingDelete) {
            $res['CascadingDelete'] = $this->cascadingDelete;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSecurityGroupRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['CascadingDelete'])) {
            $model->cascadingDelete = $map['CascadingDelete'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
