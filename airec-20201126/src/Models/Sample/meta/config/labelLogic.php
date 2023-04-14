<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\Sample\meta\config;

use AlibabaCloud\Tea\Model;

class labelLogic extends Model
{
    /**
     * @example 86400
     *
     * @var int
     */
    public $bhvTimeWindow;

    /**
     * @example click,expose
     *
     * @var string
     */
    public $negativeBhvTypes;

    /**
     * @example like
     *
     * @var string
     */
    public $positiveBhvTypes;
    protected $_name = [
        'bhvTimeWindow'    => 'BhvTimeWindow',
        'negativeBhvTypes' => 'NegativeBhvTypes',
        'positiveBhvTypes' => 'PositiveBhvTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bhvTimeWindow) {
            $res['BhvTimeWindow'] = $this->bhvTimeWindow;
        }
        if (null !== $this->negativeBhvTypes) {
            $res['NegativeBhvTypes'] = $this->negativeBhvTypes;
        }
        if (null !== $this->positiveBhvTypes) {
            $res['PositiveBhvTypes'] = $this->positiveBhvTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return labelLogic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BhvTimeWindow'])) {
            $model->bhvTimeWindow = $map['BhvTimeWindow'];
        }
        if (isset($map['NegativeBhvTypes'])) {
            $model->negativeBhvTypes = $map['NegativeBhvTypes'];
        }
        if (isset($map['PositiveBhvTypes'])) {
            $model->positiveBhvTypes = $map['PositiveBhvTypes'];
        }

        return $model;
    }
}
