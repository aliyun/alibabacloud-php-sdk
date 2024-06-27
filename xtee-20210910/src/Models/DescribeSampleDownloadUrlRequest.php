<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeSampleDownloadUrlRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $regId;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $sampleId;
    protected $_name = [
        'lang'     => 'Lang',
        'regId'    => 'regId',
        'sampleId' => 'sampleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->sampleId) {
            $res['sampleId'] = $this->sampleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSampleDownloadUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['sampleId'])) {
            $model->sampleId = $map['sampleId'];
        }

        return $model;
    }
}
