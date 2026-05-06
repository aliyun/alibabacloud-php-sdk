<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class ListTaskGroupRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $sampleName;

    /**
     * @var string
     */
    public $taskGroupName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'lang' => 'Lang',
        'pageSize' => 'PageSize',
        'regId' => 'RegId',
        'sampleName' => 'SampleName',
        'taskGroupName' => 'TaskGroupName',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regId) {
            $res['RegId'] = $this->regId;
        }

        if (null !== $this->sampleName) {
            $res['SampleName'] = $this->sampleName;
        }

        if (null !== $this->taskGroupName) {
            $res['TaskGroupName'] = $this->taskGroupName;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegId'])) {
            $model->regId = $map['RegId'];
        }

        if (isset($map['SampleName'])) {
            $model->sampleName = $map['SampleName'];
        }

        if (isset($map['TaskGroupName'])) {
            $model->taskGroupName = $map['TaskGroupName'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
