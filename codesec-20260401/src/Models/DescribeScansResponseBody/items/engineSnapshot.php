<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScansResponseBody\items;

use AlibabaCloud\Dara\Model;

class engineSnapshot extends Model
{
    /**
     * @var bool
     */
    public $sast;

    /**
     * @var bool
     */
    public $sca;
    protected $_name = [
        'sast' => 'sast',
        'sca' => 'sca',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sast) {
            $res['sast'] = $this->sast;
        }

        if (null !== $this->sca) {
            $res['sca'] = $this->sca;
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
        if (isset($map['sast'])) {
            $model->sast = $map['sast'];
        }

        if (isset($map['sca'])) {
            $model->sca = $map['sca'];
        }

        return $model;
    }
}
