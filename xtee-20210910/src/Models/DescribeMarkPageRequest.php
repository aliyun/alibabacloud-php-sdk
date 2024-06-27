<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeMarkPageRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var bool
     */
    public $isPage;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $taskLogId;
    protected $_name = [
        'lang'        => 'Lang',
        'currentPage' => 'currentPage',
        'direction'   => 'direction',
        'isPage'      => 'isPage',
        'order'       => 'order',
        'pageSize'    => 'pageSize',
        'regId'       => 'regId',
        'taskLogId'   => 'taskLogId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }
        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }
        if (null !== $this->isPage) {
            $res['isPage'] = $this->isPage;
        }
        if (null !== $this->order) {
            $res['order'] = $this->order;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->taskLogId) {
            $res['taskLogId'] = $this->taskLogId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMarkPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }
        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }
        if (isset($map['isPage'])) {
            $model->isPage = $map['isPage'];
        }
        if (isset($map['order'])) {
            $model->order = $map['order'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['taskLogId'])) {
            $model->taskLogId = $map['taskLogId'];
        }

        return $model;
    }
}
