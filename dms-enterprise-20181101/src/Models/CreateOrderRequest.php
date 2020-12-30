<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateOrderRequest extends Model
{
    /**
     * @var int
     */
    public $tid;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var mixed[]
     */
    public $pluginParam;

    /**
     * @var string
     */
    public $relatedUserList;

    /**
     * @var string
     */
    public $pluginType;
    protected $_name = [
        'tid'             => 'Tid',
        'comment'         => 'Comment',
        'pluginParam'     => 'PluginParam',
        'relatedUserList' => 'RelatedUserList',
        'pluginType'      => 'PluginType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->pluginParam) {
            $res['PluginParam'] = $this->pluginParam;
        }
        if (null !== $this->relatedUserList) {
            $res['RelatedUserList'] = $this->relatedUserList;
        }
        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['PluginParam'])) {
            $model->pluginParam = $map['PluginParam'];
        }
        if (isset($map['RelatedUserList'])) {
            $model->relatedUserList = $map['RelatedUserList'];
        }
        if (isset($map['PluginType'])) {
            $model->pluginType = $map['PluginType'];
        }

        return $model;
    }
}
