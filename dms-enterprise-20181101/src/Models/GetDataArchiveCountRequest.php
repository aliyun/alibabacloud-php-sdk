<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class GetDataArchiveCountRequest extends Model
{
    /**
     * @var string
     */
    public $orderResultType;
    /**
     * @var string
     */
    public $pluginType;
    /**
     * @var string
     */
    public $searchDateType;
    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'orderResultType' => 'OrderResultType',
        'pluginType'      => 'PluginType',
        'searchDateType'  => 'SearchDateType',
        'tid'             => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderResultType) {
            $res['OrderResultType'] = $this->orderResultType;
        }

        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
        }

        if (null !== $this->searchDateType) {
            $res['SearchDateType'] = $this->searchDateType;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['OrderResultType'])) {
            $model->orderResultType = $map['OrderResultType'];
        }

        if (isset($map['PluginType'])) {
            $model->pluginType = $map['PluginType'];
        }

        if (isset($map['SearchDateType'])) {
            $model->searchDateType = $map['SearchDateType'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
