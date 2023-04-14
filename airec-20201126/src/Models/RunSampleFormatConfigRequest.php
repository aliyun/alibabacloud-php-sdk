<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class RunSampleFormatConfigRequest extends Model
{
    /**
     * @example latest
     *
     * @var string
     */
    public $mode;
    protected $_name = [
        'mode' => 'mode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunSampleFormatConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        return $model;
    }
}
