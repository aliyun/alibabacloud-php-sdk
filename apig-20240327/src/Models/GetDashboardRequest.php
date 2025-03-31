<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetDashboardRequest\filter;

class GetDashboardRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $apiId;

    /**
     * @var filter
     */
    public $filter;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pluginClassId;

    /**
     * @var string
     */
    public $pluginId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $upstreamCluster;
    protected $_name = [
        'acceptLanguage' => 'acceptLanguage',
        'apiId' => 'apiId',
        'filter' => 'filter',
        'name' => 'name',
        'pluginClassId' => 'pluginClassId',
        'pluginId' => 'pluginId',
        'source' => 'source',
        'upstreamCluster' => 'upstreamCluster',
    ];

    public function validate()
    {
        if (null !== $this->filter) {
            $this->filter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['acceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->apiId) {
            $res['apiId'] = $this->apiId;
        }

        if (null !== $this->filter) {
            $res['filter'] = null !== $this->filter ? $this->filter->toArray($noStream) : $this->filter;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pluginClassId) {
            $res['pluginClassId'] = $this->pluginClassId;
        }

        if (null !== $this->pluginId) {
            $res['pluginId'] = $this->pluginId;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->upstreamCluster) {
            $res['upstreamCluster'] = $this->upstreamCluster;
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
        if (isset($map['acceptLanguage'])) {
            $model->acceptLanguage = $map['acceptLanguage'];
        }

        if (isset($map['apiId'])) {
            $model->apiId = $map['apiId'];
        }

        if (isset($map['filter'])) {
            $model->filter = filter::fromMap($map['filter']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pluginClassId'])) {
            $model->pluginClassId = $map['pluginClassId'];
        }

        if (isset($map['pluginId'])) {
            $model->pluginId = $map['pluginId'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['upstreamCluster'])) {
            $model->upstreamCluster = $map['upstreamCluster'];
        }

        return $model;
    }
}
