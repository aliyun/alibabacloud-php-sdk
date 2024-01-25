<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\Resource;

use AlibabaCloud\Tea\Model;

class publicIP extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @example 1
     *
     * @var int
     */
    public $required;
    protected $_name = [
        'bandwidth' => 'bandwidth',
        'required'  => 'required',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->required) {
            $res['required'] = $this->required;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publicIP
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bandwidth'])) {
            $model->bandwidth = $map['bandwidth'];
        }
        if (isset($map['required'])) {
            $model->required = $map['required'];
        }

        return $model;
    }
}
