<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeTaskLogListRequest extends Model
{
    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var bool
     */
    public $isPage;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskLogId;

    /**
     * @var string
     */
    public $regId;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'isPage'      => 'IsPage',
        'lang'        => 'Lang',
        'pageSize'    => 'PageSize',
        'taskId'      => 'TaskId',
        'taskLogId'   => 'TaskLogId',
        'regId'       => 'regId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->isPage) {
            $res['IsPage'] = $this->isPage;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskLogId) {
            $res['TaskLogId'] = $this->taskLogId;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTaskLogListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['IsPage'])) {
            $model->isPage = $map['IsPage'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskLogId'])) {
            $model->taskLogId = $map['TaskLogId'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        return $model;
    }
}
