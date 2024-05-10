<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageInstancesRequest extends Model
{
    /**
     * @description The search condition that is used to filter the server. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **name**: the search condition
     *
     *   **name**: the value of the search condition
     *
     *   **logicalExp**: the logical relation for multiple search conditions Valid values:
     *
     *   **OR**: The search conditions use a logical **OR**.
     *   **AND**: The search conditions use a logical **AND**.
     *
     * > You can call the [DescribeImageCriteria](https://help.aliyun.com/document_detail/471822.html) operation to query the supported search conditions.
     * @example [{"name":"instanceId","value":"390100182","logicalExp":"AND"}]
     *
     * @var string
     */
    public $criteria;

    /**
     * @description The number of the page to return. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The logical relationship that you want to use to evaluate multiple search conditions. Valid values:
     *
     *   **OR**: The search conditions are evaluated by using a logical **OR**.
     *   **AND**: The search conditions are evaluated by using a logical **AND**.
     *
     * @example OR
     *
     * @var string
     */
    public $logicalExp;

    /**
     * @description The number of entries to return on each page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * > : We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specifies whether the image is scanned. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $scanned;
    protected $_name = [
        'criteria'    => 'Criteria',
        'currentPage' => 'CurrentPage',
        'logicalExp'  => 'LogicalExp',
        'pageSize'    => 'PageSize',
        'scanned'     => 'Scanned',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->logicalExp) {
            $res['LogicalExp'] = $this->logicalExp;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->scanned) {
            $res['Scanned'] = $this->scanned;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['LogicalExp'])) {
            $model->logicalExp = $map['LogicalExp'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Scanned'])) {
            $model->scanned = $map['Scanned'];
        }

        return $model;
    }
}
