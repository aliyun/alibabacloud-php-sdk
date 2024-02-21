<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class StartReverseWriterRequest extends Model
{
    /**
     * @description The offset of the Incremental Write module. Specify a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * > The default value is the offset that is automatically saved by DTS when the task is paused.
     * @example 1695613785
     *
     * @var string
     */
    public $checkPoint;

    /**
     * @description The ID of the reverse task that was created by calling the CreateReverseDtsJob operation.
     *
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
