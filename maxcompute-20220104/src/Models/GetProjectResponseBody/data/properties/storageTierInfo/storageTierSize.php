<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\storageTierInfo;

use AlibabaCloud\Tea\Model;

class storageTierSize extends Model
{
    /**
     * @description The long-term storage.
     *
     * @example 21764917
     *
     * @var int
     */
    public $longTermSize;

    /**
     * @description The IA storage.
     *
     * @example 767693
     *
     * @var int
     */
    public $lowFrequencySize;

    /**
     * @description The standard storage.
     *
     * @example 27649172
     *
     * @var int
     */
    public $standardSize;
    protected $_name = [
        'longTermSize'     => 'longTermSize',
        'lowFrequencySize' => 'lowFrequencySize',
        'standardSize'     => 'standardSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->longTermSize) {
            $res['longTermSize'] = $this->longTermSize;
        }
        if (null !== $this->lowFrequencySize) {
            $res['lowFrequencySize'] = $this->lowFrequencySize;
        }
        if (null !== $this->standardSize) {
            $res['standardSize'] = $this->standardSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageTierSize
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['longTermSize'])) {
            $model->longTermSize = $map['longTermSize'];
        }
        if (isset($map['lowFrequencySize'])) {
            $model->lowFrequencySize = $map['lowFrequencySize'];
        }
        if (isset($map['standardSize'])) {
            $model->standardSize = $map['standardSize'];
        }

        return $model;
    }
}
