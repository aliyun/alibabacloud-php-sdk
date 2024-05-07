<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class ListFilesRequest extends Model
{
    /**
     * @example 500
     *
     * @var int
     */
    public $limit;

    /**
     * @example 20220110/
     *
     * @var string
     */
    public $prefix;
    protected $_name = [
        'limit'  => 'Limit',
        'prefix' => 'Prefix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        return $model;
    }
}
