<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeOssObjectsRequest extends Model
{
    /**
     * @description The page number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The code of the file type.
     *
     * @example 1
     *
     * @var int
     */
    public $fileCategoryCode;

    /**
     * @description The ID of the instance to which the OSS object belongs.
     *
     * > You can call the **DescribeInstances** operation to query the instance ID.
     * @example ins-2222
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The end time of the last scan. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1536751124000
     *
     * @var int
     */
    public $lastScanTimeEnd;

    /**
     * @description The start time of the last scan. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1536751124000
     *
     * @var int
     */
    public $lastScanTimeStart;

    /**
     * @description The search keyword. Fuzzy match is supported.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 12
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The sensitivity level of the OSS object. Valid values:
     *
     *   **1**: N/A, which indicates that no sensitive data is detected.
     *   **2**: S1, which indicates the low sensitivity level.
     *   **3**: S2, which indicates the medium sensitivity level.
     *   **4**: S3, which indicates the high sensitivity level.
     *   **5**: S4, which indicates the highest sensitivity level.
     *
     * @example 2
     *
     * @var int
     */
    public $riskLevelId;

    /**
     * @description The ID of the sensitive data detection rule that the OSS object hits.
     *
     * > You can call the **DescribeRules** operation to query the ID of the sensitive data detection rule.
     * @example 1222
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The region in which the data asset resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $serviceRegionId;

    /**
     * @description The ID of the industry-specific rule template.
     *
     * @example 1
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'currentPage'       => 'CurrentPage',
        'fileCategoryCode'  => 'FileCategoryCode',
        'instanceId'        => 'InstanceId',
        'lang'              => 'Lang',
        'lastScanTimeEnd'   => 'LastScanTimeEnd',
        'lastScanTimeStart' => 'LastScanTimeStart',
        'name'              => 'Name',
        'pageSize'          => 'PageSize',
        'riskLevelId'       => 'RiskLevelId',
        'ruleId'            => 'RuleId',
        'serviceRegionId'   => 'ServiceRegionId',
        'templateId'        => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->fileCategoryCode) {
            $res['FileCategoryCode'] = $this->fileCategoryCode;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->lastScanTimeEnd) {
            $res['LastScanTimeEnd'] = $this->lastScanTimeEnd;
        }
        if (null !== $this->lastScanTimeStart) {
            $res['LastScanTimeStart'] = $this->lastScanTimeStart;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOssObjectsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['FileCategoryCode'])) {
            $model->fileCategoryCode = $map['FileCategoryCode'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['LastScanTimeEnd'])) {
            $model->lastScanTimeEnd = $map['LastScanTimeEnd'];
        }
        if (isset($map['LastScanTimeStart'])) {
            $model->lastScanTimeStart = $map['LastScanTimeStart'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
