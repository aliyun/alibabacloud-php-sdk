<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeRequestHitRequest extends Model
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
     * @var string
     */
    public $sRequestId;
    protected $_name = [
        'lang'       => 'Lang',
        'regId'      => 'regId',
        'sRequestId' => 'sRequestId',
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
        if (null !== $this->sRequestId) {
            $res['sRequestId'] = $this->sRequestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRequestHitRequest
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
        if (isset($map['sRequestId'])) {
            $model->sRequestId = $map['sRequestId'];
        }

        return $model;
    }
}
