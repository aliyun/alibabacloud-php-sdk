<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsSlsADBJobRequest;

use AlibabaCloud\Tea\Model;

class unixTimestampConvert extends Model
{
    /**
     * @example false。
     *
     * @var string
     */
    public $convert;

    /**
     * @example  APSyyyyMMdd
     *
     * @var string
     */
    public $format;

    /**
     * @example false
     *
     * @var bool
     */
    public $transform;
    protected $_name = [
        'convert'   => 'Convert',
        'format'    => 'Format',
        'transform' => 'Transform',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->convert) {
            $res['Convert'] = $this->convert;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->transform) {
            $res['Transform'] = $this->transform;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return unixTimestampConvert
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Convert'])) {
            $model->convert = $map['Convert'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Transform'])) {
            $model->transform = $map['Transform'];
        }

        return $model;
    }
}
