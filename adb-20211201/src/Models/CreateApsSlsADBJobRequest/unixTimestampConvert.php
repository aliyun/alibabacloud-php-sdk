<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsSlsADBJobRequest;

use AlibabaCloud\Dara\Model;

class unixTimestampConvert extends Model
{
    /**
     * @var string
     */
    public $convert;

    /**
     * @var string
     */
    public $format;

    /**
     * @var bool
     */
    public $transform;
    protected $_name = [
        'convert' => 'Convert',
        'format' => 'Format',
        'transform' => 'Transform',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
