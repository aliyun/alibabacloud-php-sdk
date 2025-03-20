<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListImageTransformsRequest extends Model
{
    /**
     * @description Configuration ID. Can be obtained by calling the [ListImageTransforms](https://help.aliyun.com/document_detail/2869056.html) interface.
     *
     * @example 352816096987136
     *
     * @var int
     */
    public $configId;

    /**
     * @description Configuration type, which can be used to query global or rule configurations. Possible values:
     * - global: Query global configuration;
     * - rule: Query rule configuration;
     *
     * This parameter is optional. If not provided, it will not distinguish between global and rule configurations.
     *
     * @example global
     *
     * @var string
     */
    public $configType;

    /**
     * @description Page number. The default value is 1 if not provided.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Number of items per page. The maximum value is 500, and the default value is 500 if not provided.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Rule name. This parameter is not required when adding a global configuration.
     *
     * @example test1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Site ID. Can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) interface.
     *
     * This parameter is required.
     *
     * @example 123456****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description Site version number. For sites with version management enabled, you can use this parameter to specify the site version for which the configuration takes effect. The default value is version 0.
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
     * @return ListImageTransformsRequest
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
