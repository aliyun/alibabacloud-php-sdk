<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceMirrorRequest extends Model
{
    /**
     * @var int
     */
    public $ratio;

    /**
     * @var string[]
     */
    public $target;
    protected $_name = [
        'ratio'  => 'Ratio',
        'target' => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceMirrorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }
        if (isset($map['Target'])) {
            if (!empty($map['Target'])) {
                $model->target = $map['Target'];
            }
        }

        return $model;
    }
}
