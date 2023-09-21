<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineItemListResponseBody;

use AlibabaCloud\Tea\Model;

class baselineItemInfos extends Model
{
    /**
     * @description The alias of the baseline type.
     *
     * @example AccessKey pair leak
     *
     * @var string
     */
    public $baselineClassAlias;

    /**
     * @description The key of the baseline type.
     *
     * @example ak_leak
     *
     * @var string
     */
    public $baselineClassKey;

    /**
     * @description The alias of the baseline check item.
     *
     * @example AccessKey pair leak
     *
     * @var string
     */
    public $baselineItemAlias;

    /**
     * @description The key of the baseline check item.
     *
     * @example ak_leak
     *
     * @var string
     */
    public $baselineItemKey;

    /**
     * @description The alias of the baseline.
     *
     * @example AccessKey pair leak
     *
     * @var string
     */
    public $baselineNameAlias;

    /**
     * @description The key of the baseline name.
     *
     * @example ak_leak
     *
     * @var string
     */
    public $baselineNameKey;

    /**
     * @description The status of the baseline risks. Valid values:
     *
     *   **0**: unfixed
     *   **1**: fixed
     *   **2**: pending verification
     *   **3**: fixing failed
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description Indicates whether the baseline check item is added to the whitelist. Valid values:
     *
     *   **0**: The baseline check item is not added to the whitelist.
     *   **1**: The baseline check item is added to the whitelist.
     *
     * @example 0
     *
     * @var int
     */
    public $whiteList;
    protected $_name = [
        'baselineClassAlias' => 'BaselineClassAlias',
        'baselineClassKey'   => 'BaselineClassKey',
        'baselineItemAlias'  => 'BaselineItemAlias',
        'baselineItemKey'    => 'BaselineItemKey',
        'baselineNameAlias'  => 'BaselineNameAlias',
        'baselineNameKey'    => 'BaselineNameKey',
        'status'             => 'Status',
        'whiteList'          => 'WhiteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineClassAlias) {
            $res['BaselineClassAlias'] = $this->baselineClassAlias;
        }
        if (null !== $this->baselineClassKey) {
            $res['BaselineClassKey'] = $this->baselineClassKey;
        }
        if (null !== $this->baselineItemAlias) {
            $res['BaselineItemAlias'] = $this->baselineItemAlias;
        }
        if (null !== $this->baselineItemKey) {
            $res['BaselineItemKey'] = $this->baselineItemKey;
        }
        if (null !== $this->baselineNameAlias) {
            $res['BaselineNameAlias'] = $this->baselineNameAlias;
        }
        if (null !== $this->baselineNameKey) {
            $res['BaselineNameKey'] = $this->baselineNameKey;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baselineItemInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineClassAlias'])) {
            $model->baselineClassAlias = $map['BaselineClassAlias'];
        }
        if (isset($map['BaselineClassKey'])) {
            $model->baselineClassKey = $map['BaselineClassKey'];
        }
        if (isset($map['BaselineItemAlias'])) {
            $model->baselineItemAlias = $map['BaselineItemAlias'];
        }
        if (isset($map['BaselineItemKey'])) {
            $model->baselineItemKey = $map['BaselineItemKey'];
        }
        if (isset($map['BaselineNameAlias'])) {
            $model->baselineNameAlias = $map['BaselineNameAlias'];
        }
        if (isset($map['BaselineNameKey'])) {
            $model->baselineNameKey = $map['BaselineNameKey'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WhiteList'])) {
            $model->whiteList = $map['WhiteList'];
        }

        return $model;
    }
}
