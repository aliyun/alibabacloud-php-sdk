<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetOfficeEditUrlOption extends Model
{
    /**
     * @var bool
     */
    public $copy;

    /**
     * @var bool
     */
    public $print;

    /**
     * @var bool
     */
    public $readonly;
    protected $_name = [
        'copy'     => 'copy',
        'print'    => 'print',
        'readonly' => 'readonly',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->copy) {
            $res['copy'] = $this->copy;
        }
        if (null !== $this->print) {
            $res['print'] = $this->print;
        }
        if (null !== $this->readonly) {
            $res['readonly'] = $this->readonly;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOfficeEditUrlOption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['copy'])) {
            $model->copy = $map['copy'];
        }
        if (isset($map['print'])) {
            $model->print = $map['print'];
        }
        if (isset($map['readonly'])) {
            $model->readonly = $map['readonly'];
        }

        return $model;
    }
}
