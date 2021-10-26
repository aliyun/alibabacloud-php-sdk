<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribePluginTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $pluginName;

    /**
     * @var string
     */
    public $language;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'pluginName'    => 'PluginName',
        'language'      => 'Language',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->pluginName) {
            $res['PluginName'] = $this->pluginName;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePluginTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['PluginName'])) {
            $model->pluginName = $map['PluginName'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        return $model;
    }
}
