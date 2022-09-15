<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class GetPluginsRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var int
     */
    public $category;

    /**
     * @var bool
     */
    public $enableOnly;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var string
     */
    public $mseSessionId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'category'        => 'Category',
        'enableOnly'      => 'EnableOnly',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'mseSessionId'    => 'MseSessionId',
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
        if (null !== $this->mseSessionId) {
            $res['MseSessionId'] = $this->mseSessionId;
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
        if (isset($map['MseSessionId'])) {
            $model->mseSessionId = $map['MseSessionId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
