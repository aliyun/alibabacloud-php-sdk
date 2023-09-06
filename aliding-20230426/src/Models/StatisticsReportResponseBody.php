<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class StatisticsReportResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $commentNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $commentUserNum;

    /**
     * @example 2
     *
     * @var int
     */
    public $likeNum;

    /**
     * @example 3
     *
     * @var int
     */
    public $readNum;

    /**
     * @description requestId
     *
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'commentNum'     => 'commentNum',
        'commentUserNum' => 'commentUserNum',
        'likeNum'        => 'likeNum',
        'readNum'        => 'readNum',
        'requestId'      => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return StatisticsReportResponseBody
     */
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
