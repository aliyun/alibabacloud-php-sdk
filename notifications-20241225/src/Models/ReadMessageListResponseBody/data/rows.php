<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageListResponseBody\data;

use AlibabaCloud\Dara\Model;

class rows extends Model
{
    /**
     * @var string
     */
    public $categoryCode;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $class;

    /**
     * @var int
     */
    public $classId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $deleted;

    /**
     * @var int
     */
    public $gmtCreated;

    /**
     * @var int
     */
    public $gmtUpdate;

    /**
     * @var int
     */
    public $massId;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var int
     */
    public $msgId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $titleh;
    protected $_name = [
        'categoryCode' => 'CategoryCode',
        'categoryName' => 'CategoryName',
        'class' => 'Class',
        'classId' => 'ClassId',
        'content' => 'Content',
        'deleted' => 'Deleted',
        'gmtCreated' => 'GmtCreated',
        'gmtUpdate' => 'GmtUpdate',
        'massId' => 'MassId',
        'memo' => 'Memo',
        'msgId' => 'MsgId',
        'status' => 'Status',
        'title' => 'Title',
        'titleh' => 'Titleh',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryCode) {
            $res['CategoryCode'] = $this->categoryCode;
        }

        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->class) {
            $res['Class'] = $this->class;
        }

        if (null !== $this->classId) {
            $res['ClassId'] = $this->classId;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtUpdate) {
            $res['GmtUpdate'] = $this->gmtUpdate;
        }

        if (null !== $this->massId) {
            $res['MassId'] = $this->massId;
        }

        if (null !== $this->memo) {
            $res['Memo'] = $this->memo;
        }

        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->titleh) {
            $res['Titleh'] = $this->titleh;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryCode'])) {
            $model->categoryCode = $map['CategoryCode'];
        }

        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['Class'])) {
            $model->class = $map['Class'];
        }

        if (isset($map['ClassId'])) {
            $model->classId = $map['ClassId'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtUpdate'])) {
            $model->gmtUpdate = $map['GmtUpdate'];
        }

        if (isset($map['MassId'])) {
            $model->massId = $map['MassId'];
        }

        if (isset($map['Memo'])) {
            $model->memo = $map['Memo'];
        }

        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Titleh'])) {
            $model->titleh = $map['Titleh'];
        }

        return $model;
    }
}
