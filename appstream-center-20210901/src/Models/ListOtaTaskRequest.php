<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class ListOtaTaskRequest extends Model
{
    /**
     * @description The ID of the delivery group.
     *
     * This parameter is required.
     *
     * @example aig-53fvrq1oanz6c****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @description The type of the OTA update task.
     *
     * Valid values:
     *
     *   Fota: update of the system components of Alibaba Cloud Workspace
     *
     * This parameter is required.
     *
     * @example Fota
     *
     * @var string
     */
    public $otaType;

    /**
     * @description The page number of the page to return.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 100.
     *
     * This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'otaType' => 'OtaType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->otaType) {
            $res['OtaType'] = $this->otaType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOtaTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['OtaType'])) {
            $model->otaType = $map['OtaType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
