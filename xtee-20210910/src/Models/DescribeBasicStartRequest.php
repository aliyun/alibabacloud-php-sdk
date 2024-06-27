<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeBasicStartRequest extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $endDs;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $service;

    /**
     * @var string
     */
    public $startDs;
    protected $_name = [
        'appKey'  => 'appKey',
        'endDs'   => 'endDs',
        'regId'   => 'regId',
        'service' => 'service',
        'startDs' => 'startDs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['appKey'] = $this->appKey;
        }
        if (null !== $this->endDs) {
            $res['endDs'] = $this->endDs;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->service) {
            $res['service'] = $this->service;
        }
        if (null !== $this->startDs) {
            $res['startDs'] = $this->startDs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBasicStartRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appKey'])) {
            $model->appKey = $map['appKey'];
        }
        if (isset($map['endDs'])) {
            $model->endDs = $map['endDs'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['service'])) {
            $model->service = $map['service'];
        }
        if (isset($map['startDs'])) {
            $model->startDs = $map['startDs'];
        }

        return $model;
    }
}
