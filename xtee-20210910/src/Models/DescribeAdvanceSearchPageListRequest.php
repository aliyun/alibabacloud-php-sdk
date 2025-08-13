<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeAdvanceSearchPageListRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $condition;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $eventBeginTime;

    /**
     * @var string
     */
    public $eventCodes;

    /**
     * @var int
     */
    public $eventEndTime;

    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $fieldValue;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regId;
    protected $_name = [
        'lang' => 'Lang',
        'condition' => 'condition',
        'currentPage' => 'currentPage',
        'eventBeginTime' => 'eventBeginTime',
        'eventCodes' => 'eventCodes',
        'eventEndTime' => 'eventEndTime',
        'fieldName' => 'fieldName',
        'fieldValue' => 'fieldValue',
        'pageSize' => 'pageSize',
        'regId' => 'regId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->condition) {
            $res['condition'] = $this->condition;
        }

        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }

        if (null !== $this->eventBeginTime) {
            $res['eventBeginTime'] = $this->eventBeginTime;
        }

        if (null !== $this->eventCodes) {
            $res['eventCodes'] = $this->eventCodes;
        }

        if (null !== $this->eventEndTime) {
            $res['eventEndTime'] = $this->eventEndTime;
        }

        if (null !== $this->fieldName) {
            $res['fieldName'] = $this->fieldName;
        }

        if (null !== $this->fieldValue) {
            $res['fieldValue'] = $this->fieldValue;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['condition'])) {
            $model->condition = $map['condition'];
        }

        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }

        if (isset($map['eventBeginTime'])) {
            $model->eventBeginTime = $map['eventBeginTime'];
        }

        if (isset($map['eventCodes'])) {
            $model->eventCodes = $map['eventCodes'];
        }

        if (isset($map['eventEndTime'])) {
            $model->eventEndTime = $map['eventEndTime'];
        }

        if (isset($map['fieldName'])) {
            $model->fieldName = $map['fieldName'];
        }

        if (isset($map['fieldValue'])) {
            $model->fieldValue = $map['fieldValue'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        return $model;
    }
}
