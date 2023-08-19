<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListCheckItemWarningSummaryRequest extends Model
{
    /**
     * @description The name of the check item. Fuzzy match is supported.
     *
     * @example password
     *
     * @var string
     */
    public $checkItemFuzzy;

    /**
     * @description The risk level. Default value: null, which indicates that check items at all risk levels are queried.Valid values:
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example medium
     *
     * @var string
     */
    public $checkLevel;

    /**
     * @description The type of the check item.
     *
     * @example hc.check.type.attack_defense
     *
     * @var string
     */
    public $checkType;

    /**
     * @description The risk status. Default value: null, which indicates that check items in all states are queried.Valid values:
     *   **1**: failed
     *   **3**: passed
     *
     * @example 3
     *
     * @var int
     */
    public $checkWarningStatus;

    /**
     * @description The name of the field that is used to query containers.
     *
     * @example clusterId
     *
     * @var string
     */
    public $containerFieldName;

    /**
     * @description The value of the field that is used to query containers.
     *
     * @example c471f0f61b9c04f8380556e922cf1****
     *
     * @var string
     */
    public $containerFieldValue;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The ID of the asset group.
     *
     * > You can call the [DescribeAllGroups](~~DescribeAllGroups~~) operation to query the IDs of asset groups.
     * @example 1161****
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
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
     * @description The number of entries to return on each page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * > We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the baseline.
     *
     * @example weak_password
     *
     * @var string
     */
    public $riskType;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'checkItemFuzzy'      => 'CheckItemFuzzy',
        'checkLevel'          => 'CheckLevel',
        'checkType'           => 'CheckType',
        'checkWarningStatus'  => 'CheckWarningStatus',
        'containerFieldName'  => 'ContainerFieldName',
        'containerFieldValue' => 'ContainerFieldValue',
        'currentPage'         => 'CurrentPage',
        'groupId'             => 'GroupId',
        'lang'                => 'Lang',
        'pageSize'            => 'PageSize',
        'riskType'            => 'RiskType',
        'source'              => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkItemFuzzy) {
            $res['CheckItemFuzzy'] = $this->checkItemFuzzy;
        }
        if (null !== $this->checkLevel) {
            $res['CheckLevel'] = $this->checkLevel;
        }
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->checkWarningStatus) {
            $res['CheckWarningStatus'] = $this->checkWarningStatus;
        }
        if (null !== $this->containerFieldName) {
            $res['ContainerFieldName'] = $this->containerFieldName;
        }
        if (null !== $this->containerFieldValue) {
            $res['ContainerFieldValue'] = $this->containerFieldValue;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCheckItemWarningSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckItemFuzzy'])) {
            $model->checkItemFuzzy = $map['CheckItemFuzzy'];
        }
        if (isset($map['CheckLevel'])) {
            $model->checkLevel = $map['CheckLevel'];
        }
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['CheckWarningStatus'])) {
            $model->checkWarningStatus = $map['CheckWarningStatus'];
        }
        if (isset($map['ContainerFieldName'])) {
            $model->containerFieldName = $map['ContainerFieldName'];
        }
        if (isset($map['ContainerFieldValue'])) {
            $model->containerFieldValue = $map['ContainerFieldValue'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
