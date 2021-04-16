<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListPersonTopResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $frequency;

    /**
     * @var string
     */
    public $poiId;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $passHour;

    /**
     * @var string
     */
    public $poiName;

    /**
     * @var string
     */
    public $personId;
    protected $_name = [
        'frequency' => 'Frequency',
        'poiId'     => 'PoiId',
        'corpId'    => 'CorpId',
        'passHour'  => 'PassHour',
        'poiName'   => 'PoiName',
        'personId'  => 'PersonId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }
        if (null !== $this->poiId) {
            $res['PoiId'] = $this->poiId;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->passHour) {
            $res['PassHour'] = $this->passHour;
        }
        if (null !== $this->poiName) {
            $res['PoiName'] = $this->poiName;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
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
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }
        if (isset($map['PoiId'])) {
            $model->poiId = $map['PoiId'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['PassHour'])) {
            $model->passHour = $map['PassHour'];
        }
        if (isset($map['PoiName'])) {
            $model->poiName = $map['PoiName'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }

        return $model;
    }
}
