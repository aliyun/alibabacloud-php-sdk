<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\CreateFilteringAlgorithmResponseBody\result\meta;

use AlibabaCloud\Tea\Model;

class threshold extends Model
{
    /**
     * @description The fluctuation threshold for the loss of the index data.
     *
     * @example 1
     *
     * @var int
     */
    public $indexLossThreshold;

    /**
     * @description The fluctuation threshold for the size of the index.
     *
     * @example 1
     *
     * @var int
     */
    public $indexSizeThreshold;

    /**
     * @description The fluctuation threshold for the data entries in the source table.
     *
     * @example 1
     *
     * @var int
     */
    public $sourceDataRecordThreshold;

    /**
     * @description The fluctuation threshold for the size of the source table.
     *
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
