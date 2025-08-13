<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeSampleDataPageRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $dataValue;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var int
     */
    public $updateBeginTime;

    /**
     * @var int
     */
    public $updateEndTime;
    protected $_name = [
        'lang' => 'Lang',
        'currentPage' => 'currentPage',
        'dataValue' => 'dataValue',
        'pageSize' => 'pageSize',
        'regId' => 'regId',
        'updateBeginTime' => 'updateBeginTime',
        'updateEndTime' => 'updateEndTime',
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

        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }

        if (null !== $this->dataValue) {
            $res['dataValue'] = $this->dataValue;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->updateBeginTime) {
            $res['updateBeginTime'] = $this->updateBeginTime;
        }

        if (null !== $this->updateEndTime) {
            $res['updateEndTime'] = $this->updateEndTime;
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

        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }

        if (isset($map['dataValue'])) {
            $model->dataValue = $map['dataValue'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['updateBeginTime'])) {
            $model->updateBeginTime = $map['updateBeginTime'];
        }

        if (isset($map['updateEndTime'])) {
            $model->updateEndTime = $map['updateEndTime'];
        }

        return $model;
    }
}
