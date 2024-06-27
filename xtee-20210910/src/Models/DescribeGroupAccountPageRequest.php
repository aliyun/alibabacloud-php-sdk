<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeGroupAccountPageRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $communityNo;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $fieldKey;

    /**
     * @var string
     */
    public $fieldVal;

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
    public $taskId;
    protected $_name = [
        'lang'        => 'Lang',
        'communityNo' => 'communityNo',
        'currentPage' => 'currentPage',
        'direction'   => 'direction',
        'fieldKey'    => 'fieldKey',
        'fieldVal'    => 'fieldVal',
        'isPage'      => 'isPage',
        'order'       => 'order',
        'pageSize'    => 'pageSize',
        'regId'       => 'regId',
        'taskId'      => 'taskId',
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
        if (null !== $this->communityNo) {
            $res['communityNo'] = $this->communityNo;
        }
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }
        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }
        if (null !== $this->fieldKey) {
            $res['fieldKey'] = $this->fieldKey;
        }
        if (null !== $this->fieldVal) {
            $res['fieldVal'] = $this->fieldVal;
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
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupAccountPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['communityNo'])) {
            $model->communityNo = $map['communityNo'];
        }
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }
        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }
        if (isset($map['fieldKey'])) {
            $model->fieldKey = $map['fieldKey'];
        }
        if (isset($map['fieldVal'])) {
            $model->fieldVal = $map['fieldVal'];
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
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
