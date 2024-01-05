<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alicloudproc\V20240104\Models;

use AlibabaCloud\Tea\Model;

class Company extends Model
{
    /**
     * @example XXX公司
     *
     * @var string
     */
    public $name;

    /**
     * @example 12150123XX10486121
     *
     * @var string
     */
    public $uscc;
    protected $_name = [
        'name' => 'name',
        'uscc' => 'uscc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->uscc) {
            $res['uscc'] = $this->uscc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Company
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['uscc'])) {
            $model->uscc = $map['uscc'];
        }

        return $model;
    }
}
