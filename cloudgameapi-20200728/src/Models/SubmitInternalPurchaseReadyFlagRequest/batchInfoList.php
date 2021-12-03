<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SubmitInternalPurchaseReadyFlagRequest;

use AlibabaCloud\Tea\Model;

class batchInfoList extends Model
{
    /**
     * @var string
     */
    public $batchNumbers;

    /**
     * @var int
     */
    public $batchSize;
    protected $_name = [
        'batchNumbers' => 'BatchNumbers',
        'batchSize'    => 'BatchSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchNumbers) {
            $res['BatchNumbers'] = $this->batchNumbers;
        }
        if (null !== $this->batchSize) {
            $res['BatchSize'] = $this->batchSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return batchInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchNumbers'])) {
            $model->batchNumbers = $map['BatchNumbers'];
        }
        if (isset($map['BatchSize'])) {
            $model->batchSize = $map['BatchSize'];
        }

        return $model;
    }
}
