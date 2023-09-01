<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class GetPermissionRequest extends Model
{
    /**
     * @example PUBLIC
     *
     * @var string
     */
    public $accessibility;

    /**
     * @example 17915******4216
     *
     * @var string
     */
    public $creator;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'creator'       => 'Creator',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        return $model;
    }
}
