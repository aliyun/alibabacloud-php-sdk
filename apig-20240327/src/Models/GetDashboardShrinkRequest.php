<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class GetDashboardShrinkRequest extends Model
{
    /**
     * @description zh: Chinese
     * en: English
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
     * @description Filter configuration
     *
     * @var string
     */
    public $filterShrink;

    /**
     * @description Dashboard name:
     * - LOG: Access log
     * - PLUGIN: Plugin log
     *
     * @example PLUGIN
     *
     * @var string
     */
    public $name;

    /**
     * @description Plugin ID.
     *
     * @example pls-dn82a9djd8z****
     *
     * @var string
     */
    public $pluginClassId;

    /**
     * @description Dashboard source:
     * - SLS: Log dashboard
     *
     * @example SLS
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'acceptLanguage' => 'acceptLanguage',
        'apiId' => 'apiId',
        'filterShrink' => 'filter',
        'name' => 'name',
        'pluginClassId' => 'pluginClassId',
        'source' => 'source',
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
        if (null !== $this->source) {
            $res['source'] = $this->source;
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
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        return $model;
    }
}
