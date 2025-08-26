<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponseBody\data;

use AlibabaCloud\Dara\Model;

class backResult extends Model
{
    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $issue;

    /**
     * @var string
     */
    public $startDate;
    protected $_name = [
        'endDate' => 'EndDate',
        'issue' => 'Issue',
        'startDate' => 'StartDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->issue) {
            $res['Issue'] = $this->issue;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
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
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['Issue'])) {
            $model->issue = $map['Issue'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
