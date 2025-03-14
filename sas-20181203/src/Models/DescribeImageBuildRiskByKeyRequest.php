<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageBuildRiskByKeyRequest extends Model
{
    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The UUID of the image.
     *
     * @example a910053dd4710173ecc9e9d8931f****
     *
     * @var string
     */
    public $imageUuid;

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
     * @description The number of entries per page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * >  We recommend that you do not leave this parameter empty.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The key of the risk rule.
     * > You can call the [DescribeImageBuildRiskList](~~DescribeImageBuildRiskList~~) operation to obtain the value of **RiskKey**.
     *
     * @example no_user
     *
     * @var string
     */
    public $riskKey;

    /**
     * @description The status of the alert event. Valid values:
     *
     *   **0**: unhandled.
     *   **1**: ignored.
     *   **2**: false positive.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'imageUuid' => 'ImageUuid',
        'lang' => 'Lang',
        'pageSize' => 'PageSize',
        'riskKey' => 'RiskKey',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->riskKey) {
            $res['RiskKey'] = $this->riskKey;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageBuildRiskByKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['RiskKey'])) {
            $model->riskKey = $map['RiskKey'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
