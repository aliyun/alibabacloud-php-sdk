<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeAICImagesRequest extends Model
{
    /**
     * @description The description of the image.
     *
     * @var string
     */
    public $description;

    /**
     * @description The image ID of the AIC instance.
     *
     * @example m-ad0ddaddc2d54adeaa09b7c0f1e****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The type of the image. Valid values:
     *
     *   **public**: public image
     *   **private**: custom image
     *
     * @example public
     *
     * @var string
     */
    public $imageType;

    /**
     * @description The URL of the AIC image repository.
     *
     * @example ****.alibaba-inc.com/aic/socimage:test
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description The end of the time range to query. Specify the time in the 2006-01-02 format. By default, the time range to query is not restricted.
     *
     * @example 2022-02-02
     *
     * @var string
     */
    public $maxDate;

    /**
     * @description The beginning of the time range to query. Specify the time in the 2006-01-02 format. By default, the time range to query is not restricted.
     *
     * @example 2022-01-02
     *
     * @var string
     */
    public $minDate;

    /**
     * @description The page number. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. The maximum value is **100**. Default value: **10**.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The status of the image. Valid values:
     *
     *   **verifying**
     *   **disable**
     *   **available**
     *
     * @example available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'description' => 'Description',
        'imageId'     => 'ImageId',
        'imageType'   => 'ImageType',
        'imageUrl'    => 'ImageUrl',
        'maxDate'     => 'MaxDate',
        'minDate'     => 'MinDate',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->maxDate) {
            $res['MaxDate'] = $this->maxDate;
        }
        if (null !== $this->minDate) {
            $res['MinDate'] = $this->minDate;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAICImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['MaxDate'])) {
            $model->maxDate = $map['MaxDate'];
        }
        if (isset($map['MinDate'])) {
            $model->minDate = $map['MinDate'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
