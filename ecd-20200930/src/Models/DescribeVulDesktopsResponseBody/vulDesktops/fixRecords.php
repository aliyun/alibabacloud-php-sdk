<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVulDesktopsResponseBody\vulDesktops;

use AlibabaCloud\Dara\Model;

class fixRecords extends Model
{
    /**
     * @var string
     */
    public $batchId;

    /**
     * @var string
     */
    public $fixFailureReason;

    /**
     * @var string
     */
    public $fixResult;

    /**
     * @var string
     */
    public $fixTime;

    /**
     * @var string
     */
    public $fixType;
    protected $_name = [
        'batchId' => 'BatchId',
        'fixFailureReason' => 'FixFailureReason',
        'fixResult' => 'FixResult',
        'fixTime' => 'FixTime',
        'fixType' => 'FixType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }

        if (null !== $this->fixFailureReason) {
            $res['FixFailureReason'] = $this->fixFailureReason;
        }

        if (null !== $this->fixResult) {
            $res['FixResult'] = $this->fixResult;
        }

        if (null !== $this->fixTime) {
            $res['FixTime'] = $this->fixTime;
        }

        if (null !== $this->fixType) {
            $res['FixType'] = $this->fixType;
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
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }

        if (isset($map['FixFailureReason'])) {
            $model->fixFailureReason = $map['FixFailureReason'];
        }

        if (isset($map['FixResult'])) {
            $model->fixResult = $map['FixResult'];
        }

        if (isset($map['FixTime'])) {
            $model->fixTime = $map['FixTime'];
        }

        if (isset($map['FixType'])) {
            $model->fixType = $map['FixType'];
        }

        return $model;
    }
}
