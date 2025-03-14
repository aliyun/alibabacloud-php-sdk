<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeIdcProbeListRequest extends Model
{
    /**
     * @description Sets the page number from which to start displaying the query results. The default value is 1, indicating that the display starts from the first page.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The name of the IDC.
     *
     * @example 3K IDC
     *
     * @var string
     */
    public $idcName;

    /**
     * @description Specifies the maximum number of data entries to display per page in a paginated query. The default number of data entries per page is 20, and if the PageSize parameter is empty, it will default to returning 20 data entries.
     * > It is recommended that the PageSize value is not empty.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Probe status. Values:
     *
     * - **0**: Enabled
     * - **1**: Disabled
     *
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'idcName' => 'IdcName',
        'pageSize' => 'PageSize',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->idcName) {
            $res['IdcName'] = $this->idcName;
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
     * @return DescribeIdcProbeListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['IdcName'])) {
            $model->idcName = $map['IdcName'];
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
