<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextRequest;

use AlibabaCloud\Tea\Model;

class idCardConfig extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $outputIdCardQuality;
    protected $_name = [
        'outputIdCardQuality' => 'OutputIdCardQuality',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputIdCardQuality) {
            $res['OutputIdCardQuality'] = $this->outputIdCardQuality;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return idCardConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputIdCardQuality'])) {
            $model->outputIdCardQuality = $map['OutputIdCardQuality'];
        }

        return $model;
    }
}
