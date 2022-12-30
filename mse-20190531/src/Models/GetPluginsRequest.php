<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class GetPluginsRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     * zh: Chinese en: English
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The type of the plug-in. Valid values:
     *
     *   0: custom
     *   1: permission authorization
     *   2: security protection
     *   3: transmission protocol
     *   4: traffic control
     *   5: traffic observation
     *
     * @example 1
     *
     * @var int
     */
    public $category;

    /**
     * @description Specifies whether to enable the plug-in.
     *
     * @example true
     *
     * @var bool
     */
    public $enableOnly;

    /**
     * @description The ID of the gateway.
     *
     * @example gw-0adf3ad751284cc69fcf9669fba*****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The name of the plug-in.
     *
     * @example key-auth
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'category'        => 'Category',
        'enableOnly'      => 'EnableOnly',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'name'            => 'Name',
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
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->enableOnly) {
            $res['EnableOnly'] = $this->enableOnly;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPluginsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['EnableOnly'])) {
            $model->enableOnly = $map['EnableOnly'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
