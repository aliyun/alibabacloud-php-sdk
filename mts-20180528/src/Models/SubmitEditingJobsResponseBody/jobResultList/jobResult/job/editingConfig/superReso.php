<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig;

use AlibabaCloud\Tea\Model;

class superReso extends Model
{
    /**
     * @var string
     */
    public $isHalfSample;
    protected $_name = [
        'isHalfSample' => 'IsHalfSample',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isHalfSample) {
            $res['IsHalfSample'] = $this->isHalfSample;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return superReso
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsHalfSample'])) {
            $model->isHalfSample = $map['IsHalfSample'];
        }

        return $model;
    }
}
