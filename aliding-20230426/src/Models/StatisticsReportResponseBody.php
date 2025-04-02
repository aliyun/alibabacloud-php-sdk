<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class StatisticsReportResponseBody extends Model
{
    /**
     * @var int
     */
    public $commentNum;

    /**
     * @var int
     */
    public $commentUserNum;

    /**
     * @var int
     */
    public $likeNum;

    /**
     * @var int
     */
    public $readNum;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'commentNum' => 'commentNum',
        'commentUserNum' => 'commentUserNum',
        'likeNum' => 'likeNum',
        'readNum' => 'readNum',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commentNum) {
            $res['commentNum'] = $this->commentNum;
        }

        if (null !== $this->commentUserNum) {
            $res['commentUserNum'] = $this->commentUserNum;
        }

        if (null !== $this->likeNum) {
            $res['likeNum'] = $this->likeNum;
        }

        if (null !== $this->readNum) {
            $res['readNum'] = $this->readNum;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['commentNum'])) {
            $model->commentNum = $map['commentNum'];
        }

        if (isset($map['commentUserNum'])) {
            $model->commentUserNum = $map['commentUserNum'];
        }

        if (isset($map['likeNum'])) {
            $model->likeNum = $map['likeNum'];
        }

        if (isset($map['readNum'])) {
            $model->readNum = $map['readNum'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
