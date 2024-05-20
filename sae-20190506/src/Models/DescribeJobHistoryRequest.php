<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DescribeJobHistoryRequest extends Model
{
    /**
     * @description The ID of the job template.
     *
     * This parameter is required.
     * @example e1a7a07-abcb-4652-a1d3-2d57f415****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries to return on each page. Valid values: 0 to 10000.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The status of the job. Valid values:
     *
     *   **0**: The job is not executed.
     *   **1**: The job is executed.
     *   **2**: The job fails to be executed.
     *   **3**: The job is being executed.
     *
     * @example 1
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'appId'       => 'AppId',
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'state'       => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeJobHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
