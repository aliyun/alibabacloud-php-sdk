<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class ListPidLoopsRequest extends Model
{
    /**
     * @var string
     */
    public $pidProjectId;

    /**
     * @var string
     */
    public $pidLoopName;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'pidProjectId' => 'PidProjectId',
        'pidLoopName'  => 'PidLoopName',
        'currentPage'  => 'CurrentPage',
        'pageSize'     => 'PageSize',
    ];

    public function validate()
    {
        Model::validateRequired('pidProjectId', $this->pidProjectId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidProjectId) {
            $res['PidProjectId'] = $this->pidProjectId;
        }
        if (null !== $this->pidLoopName) {
            $res['PidLoopName'] = $this->pidLoopName;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPidLoopsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidProjectId'])) {
            $model->pidProjectId = $map['PidProjectId'];
        }
        if (isset($map['PidLoopName'])) {
            $model->pidLoopName = $map['PidLoopName'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
