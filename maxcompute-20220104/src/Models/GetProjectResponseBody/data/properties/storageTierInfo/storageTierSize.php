<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\storageTierInfo;

use AlibabaCloud\Dara\Model;

class storageTierSize extends Model
{
    /**
     * @var int
     */
    public $longTermSize;

    /**
     * @var int
     */
    public $lowFrequencySize;

    /**
     * @var int
     */
    public $standardSize;
    protected $_name = [
        'longTermSize' => 'longTermSize',
        'lowFrequencySize' => 'lowFrequencySize',
        'standardSize' => 'standardSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
