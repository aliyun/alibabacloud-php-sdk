<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class AddSampleDataByCsvRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $ossFileName;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $sampleBatchUuid;
    protected $_name = [
        'lang' => 'Lang',
        'ossFileName' => 'ossFileName',
        'regId' => 'regId',
        'sampleBatchUuid' => 'sampleBatchUuid',
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

        if (null !== $this->ossFileName) {
            $res['ossFileName'] = $this->ossFileName;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->sampleBatchUuid) {
            $res['sampleBatchUuid'] = $this->sampleBatchUuid;
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

        if (isset($map['ossFileName'])) {
            $model->ossFileName = $map['ossFileName'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['sampleBatchUuid'])) {
            $model->sampleBatchUuid = $map['sampleBatchUuid'];
        }

        return $model;
    }
}
