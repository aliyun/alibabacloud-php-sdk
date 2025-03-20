<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListHttpsBasicConfigurationsRequest extends Model
{
    /**
     * @description Configuration ID.
     *
     * @example 35281609698****
     *
     * @var int
     */
    public $configId;

    /**
     * @description Configuration type, which can be used to query global or rule configurations. Value range:
     * - global: Query global configuration.
     * - rule: Query rule configuration.
     *
     * This parameter is optional. If not provided, it does not distinguish between global and rule configurations.
     *
     * @example global
     *
     * @var string
     */
    public $configType;

    /**
     * @description Page number, default is 1 if not provided.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Number of items per page, maximum is 500, default is 500 if not provided.
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
     * @example 123456****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'configId' => 'ConfigId',
        'configType' => 'ConfigType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'ruleName' => 'RuleName',
        'siteId' => 'SiteId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHttpsBasicConfigurationsRequest
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

        return $model;
    }
}
