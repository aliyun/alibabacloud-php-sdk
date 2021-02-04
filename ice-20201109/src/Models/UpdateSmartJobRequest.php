<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateSmartJobRequest extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $FEExtend;
    protected $_name = [
        'jobId'    => 'JobId',
        'FEExtend' => 'FEExtend',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->FEExtend) {
            $res['FEExtend'] = $this->FEExtend;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSmartJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['FEExtend'])) {
            $model->FEExtend = $map['FEExtend'];
        }

        return $model;
    }
}
