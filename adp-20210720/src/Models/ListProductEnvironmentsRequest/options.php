<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ListProductEnvironmentsRequest;

use AlibabaCloud\Tea\Model;

class options extends Model
{
    /**
     * @var bool
     */
    public $filterWithSpecUID;

    /**
     * @var string
     */
    public $specUID;
    protected $_name = [
        'filterWithSpecUID' => 'filterWithSpecUID',
        'specUID'           => 'specUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterWithSpecUID) {
            $res['filterWithSpecUID'] = $this->filterWithSpecUID;
        }
        if (null !== $this->specUID) {
            $res['specUID'] = $this->specUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return options
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['filterWithSpecUID'])) {
            $model->filterWithSpecUID = $map['filterWithSpecUID'];
        }
        if (isset($map['specUID'])) {
            $model->specUID = $map['specUID'];
        }

        return $model;
    }
}
