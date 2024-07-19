<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceMirrorRequest extends Model
{
    /**
     * @description The percentage of the traffic that is mirrored to the destination service. Valid values: 0 to 100.
     *
     * @example 30
     *
     * @var int
     */
    public $ratio;

    /**
     * @description The instances.
     *
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
