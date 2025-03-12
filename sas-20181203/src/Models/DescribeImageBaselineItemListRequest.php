<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageBaselineItemListRequest extends Model
{
    /**
     * @description The key of the baseline type.
     *
     * @example ak_leak
     *
     * @var string
     */
    public $baselineClassKey;

    /**
     * @description The key of the baseline name.
     *
     * @example AccessKey pair leak
     *
     * @var string
     */
    public $baselineNameKey;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The UUID of the image.
     *
     * This parameter is required.
     * @example 0b5c7193300da2070220038718ad****
     *
     * @var string
     */
    public $imageUuid;

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
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The types of the assets that are scanned.
     *
     * @var string[]
     */
    public $scanRange;

    /**
     * @description The status of the baseline risk item. Valid values:
     *
     *   **0**: unfixed
     *   **1**: fixed
     *   **2**: pending verification
     *   **3**: fixing failed
     *
     * @example 0
     *
     * @var string
     */
    public $status;

    /**
     * @description The UUIDs of images.
     *
     * @var string[]
     */
    public $uuids;
    protected $_name = [
        'baselineClassKey' => 'BaselineClassKey',
        'baselineNameKey'  => 'BaselineNameKey',
        'currentPage'      => 'CurrentPage',
        'imageUuid'        => 'ImageUuid',
        'lang'             => 'Lang',
        'pageSize'         => 'PageSize',
        'scanRange'        => 'ScanRange',
        'status'           => 'Status',
        'uuids'            => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineClassKey) {
            $res['BaselineClassKey'] = $this->baselineClassKey;
        }
        if (null !== $this->baselineNameKey) {
            $res['BaselineNameKey'] = $this->baselineNameKey;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->imageUuid) {
            $res['ImageUuid'] = $this->imageUuid;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->scanRange) {
            $res['ScanRange'] = $this->scanRange;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageBaselineItemListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineClassKey'])) {
            $model->baselineClassKey = $map['BaselineClassKey'];
        }
        if (isset($map['BaselineNameKey'])) {
            $model->baselineNameKey = $map['BaselineNameKey'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ImageUuid'])) {
            $model->imageUuid = $map['ImageUuid'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ScanRange'])) {
            if (!empty($map['ScanRange'])) {
                $model->scanRange = $map['ScanRange'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uuids'])) {
            if (!empty($map['Uuids'])) {
                $model->uuids = $map['Uuids'];
            }
        }

        return $model;
    }
}
