<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListNetworkOptimizationsRequest extends Model
{
    /**
     * @description Configuration ID.
     *
     * @example 3528160969****
     *
     * @var int
     */
    public $configId;

    /**
     * @description Configuration type, which can be used to query global or rule-based configurations. The value range is as follows:
     *
     * - global: Query global configuration.
     * - rule: Query rule-based configuration.
     *
     * This parameter is optional; if not provided, it does not distinguish between global and rule-based configurations.
     *
     * @example global
     *
     * @var string
     */
    public $configType;

    /**
     * @description Page number, defaulting to 1 if not provided.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Number of items per page, with a maximum of 500. Defaults to 500 if not provided.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Rule name, which can be used to find the rule with the specified name.
     *
     * @example test
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Site ID, which can be obtained by calling the [ListSites](~~ListSites~~) interface.
     *
     * This parameter is required.
     *
     * @example 1231231221****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description Site version number. For sites with version management enabled, this parameter can specify the site version for which the configuration takes effect, defaulting to version 0.
     *
     * @example 1
     *
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'configId' => 'ConfigId',
        'configType' => 'ConfigType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'ruleName' => 'RuleName',
        'siteId' => 'SiteId',
        'siteVersion' => 'SiteVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNetworkOptimizationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        return $model;
    }
}
