<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class GetDashboardShrinkRequest extends Model
{
    /**
     * @description The language. Valid values: zh (Chinese) and en (English).
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description API ID
     *
     * @example api-c9uuekzmia8q2****
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The filter configurations.
     *
     * @var string
     */
    public $filterShrink;

    /**
     * @description The dashboard name.
     *
     *   LOG: access logs
     *   PLUGIN: plug-in logs
     *
     * @example PLUGIN
     *
     * @var string
     */
    public $name;

    /**
     * @description The plug-in ID.
     *
     * @example pls-dn82a9djd8z****
     *
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
    public $routeId;

    /**
     * @description The dashboard source. Valid values:
     *
     *   SLS: Simple Log Service
     *
     * @example SLS
     *
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
        'filterShrink' => 'filter',
        'name' => 'name',
        'pluginClassId' => 'pluginClassId',
        'pluginId' => 'pluginId',
        'routeId' => 'routeId',
        'source' => 'source',
        'upstreamCluster' => 'upstreamCluster',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['acceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->apiId) {
            $res['apiId'] = $this->apiId;
        }
        if (null !== $this->filterShrink) {
            $res['filter'] = $this->filterShrink;
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
        if (null !== $this->routeId) {
            $res['routeId'] = $this->routeId;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->upstreamCluster) {
            $res['upstreamCluster'] = $this->upstreamCluster;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDashboardShrinkRequest
     */
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
            $model->filterShrink = $map['filter'];
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
        if (isset($map['routeId'])) {
            $model->routeId = $map['routeId'];
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
