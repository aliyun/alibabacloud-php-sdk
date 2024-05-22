<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DeleteCustomLinesRequest extends Model
{
    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The unique IDs of the custom lines that you want to delete. Separate the unique IDs with commas (,).
     *
     * This parameter is required.
     * @example 1234,1235
     *
     * @var string
     */
    public $lineIds;
    protected $_name = [
        'lang'    => 'Lang',
        'lineIds' => 'LineIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->lineIds) {
            $res['LineIds'] = $this->lineIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCustomLinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['LineIds'])) {
            $model->lineIds = $map['LineIds'];
        }

        return $model;
    }
}
