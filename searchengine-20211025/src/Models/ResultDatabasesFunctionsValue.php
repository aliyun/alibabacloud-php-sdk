<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ResultDatabasesFunctionsValue extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example gfasdds2****2wfrkv
     *
     * @var string
     */
    public $signatures;
    protected $_name = [
        'name'       => 'name',
        'signatures' => 'signatures',
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
        if (null !== $this->signatures) {
            $res['signatures'] = $this->signatures;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResultDatabasesFunctionsValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['signatures'])) {
            $model->signatures = $map['signatures'];
        }

        return $model;
    }
}
