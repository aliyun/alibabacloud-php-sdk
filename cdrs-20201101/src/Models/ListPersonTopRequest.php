<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListPersonTopRequest extends Model
{
    /**
     * @example 2286049969284580091
     *
     * @var string
     */
    public $corpId;

    /**
     * @example 2021-01-21 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example rvsvisual_10596_33010000991332551639_e4b6377762bb31b10c2538b3a57cc6e7_0001610333257656000000000
     *
     * @var string
     */
    public $personId;

    /**
     * @example 2021-01-20 00:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'corpId'    => 'CorpId',
        'endTime'   => 'EndTime',
        'personId'  => 'PersonId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPersonTopRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
