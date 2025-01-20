<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
