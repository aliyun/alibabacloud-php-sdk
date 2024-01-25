<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\Resource;

use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @example ^centos_7
     *
     * @var string
     */
    public $nameRegex;
    protected $_name = [
        'id'        => 'id',
        'nameRegex' => 'nameRegex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->nameRegex) {
            $res['nameRegex'] = $this->nameRegex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return image
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['nameRegex'])) {
            $model->nameRegex = $map['nameRegex'];
        }

        return $model;
    }
}
