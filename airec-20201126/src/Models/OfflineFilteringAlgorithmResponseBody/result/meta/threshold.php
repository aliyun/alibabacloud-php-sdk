<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\OfflineFilteringAlgorithmResponseBody\result\meta;

use AlibabaCloud\Tea\Model;

class threshold extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $indexLossThreshold;

    /**
     * @example 1
     *
     * @var int
     */
    public $indexSizeThreshold;

    /**
     * @example 1
     *
     * @var int
     */
    public $sourceDataRecordThreshold;

    /**
     * @example 1
     *
     * @var int
     */
    public $sourceDataSizeThreshold;
    protected $_name = [
        'indexLossThreshold'        => 'indexLossThreshold',
        'indexSizeThreshold'        => 'indexSizeThreshold',
        'sourceDataRecordThreshold' => 'sourceDataRecordThreshold',
        'sourceDataSizeThreshold'   => 'sourceDataSizeThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexLossThreshold) {
            $res['indexLossThreshold'] = $this->indexLossThreshold;
        }
        if (null !== $this->indexSizeThreshold) {
            $res['indexSizeThreshold'] = $this->indexSizeThreshold;
        }
        if (null !== $this->sourceDataRecordThreshold) {
            $res['sourceDataRecordThreshold'] = $this->sourceDataRecordThreshold;
        }
        if (null !== $this->sourceDataSizeThreshold) {
            $res['sourceDataSizeThreshold'] = $this->sourceDataSizeThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return threshold
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['indexLossThreshold'])) {
            $model->indexLossThreshold = $map['indexLossThreshold'];
        }
        if (isset($map['indexSizeThreshold'])) {
            $model->indexSizeThreshold = $map['indexSizeThreshold'];
        }
        if (isset($map['sourceDataRecordThreshold'])) {
            $model->sourceDataRecordThreshold = $map['sourceDataRecordThreshold'];
        }
        if (isset($map['sourceDataSizeThreshold'])) {
            $model->sourceDataSizeThreshold = $map['sourceDataSizeThreshold'];
        }

        return $model;
    }
}
