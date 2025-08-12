<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\configVariables;

use AlibabaCloud\Dara\Model;

class configVariables extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $secure;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'name' => 'name',
        'secure' => 'secure',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->secure) {
            $res['secure'] = $this->secure;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['secure'])) {
            $model->secure = $map['secure'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
