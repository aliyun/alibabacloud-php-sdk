<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class StartReverseWriterRequest extends Model
{
    /**
     * @example 1695613785
     *
     * @var string
     */
    public $checkPoint;

    /**
     * @example n99m9jx822k****
     *
     * @var string
     */
    public $dtsJobId;
    protected $_name = [
        'checkPoint' => 'CheckPoint',
        'dtsJobId'   => 'DtsJobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkPoint) {
            $res['CheckPoint'] = $this->checkPoint;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartReverseWriterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckPoint'])) {
            $model->checkPoint = $map['CheckPoint'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }

        return $model;
    }
}
