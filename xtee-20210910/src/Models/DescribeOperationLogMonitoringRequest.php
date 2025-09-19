<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeOperationLogMonitoringRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $userNameSearch;
    protected $_name = [
        'lang' => 'Lang',
        'endDate' => 'endDate',
        'regId' => 'regId',
        'startDate' => 'startDate',
        'userNameSearch' => 'userNameSearch',
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

        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }

        if (null !== $this->userNameSearch) {
            $res['userNameSearch'] = $this->userNameSearch;
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

        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }

        if (isset($map['userNameSearch'])) {
            $model->userNameSearch = $map['userNameSearch'];
        }

        return $model;
    }
}
