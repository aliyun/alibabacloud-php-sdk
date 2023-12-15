<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListPersonTopResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2286049969284580096
     *
     * @var string
     */
    public $corpId;

    /**
     * @example 1
     *
     * @var string
     */
    public $frequency;

    /**
     * @example 18
     *
     * @var string
     */
    public $passHour;

    /**
     * @example rvsvisual_10596_33010000991332551639_e4b6377762bb31b10c2538b3a57cc6e7_0001610333257656000000000
     *
     * @var string
     */
    public $personId;

    /**
     * @example 123456
     *
     * @var string
     */
    public $poiId;

    /**
     * @var string
     */
    public $poiName;
    protected $_name = [
        'corpId'    => 'CorpId',
        'frequency' => 'Frequency',
        'passHour'  => 'PassHour',
        'personId'  => 'PersonId',
        'poiId'     => 'PoiId',
        'poiName'   => 'PoiName',
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
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }
        if (null !== $this->passHour) {
            $res['PassHour'] = $this->passHour;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->poiId) {
            $res['PoiId'] = $this->poiId;
        }
        if (null !== $this->poiName) {
            $res['PoiName'] = $this->poiName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }
        if (isset($map['PassHour'])) {
            $model->passHour = $map['PassHour'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['PoiId'])) {
            $model->poiId = $map['PoiId'];
        }
        if (isset($map['PoiName'])) {
            $model->poiName = $map['PoiName'];
        }

        return $model;
    }
}
