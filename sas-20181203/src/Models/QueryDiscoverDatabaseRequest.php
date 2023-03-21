<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class QueryDiscoverDatabaseRequest extends Model
{
    /**
     * @var string
     */
    public $createMark;
    protected $_name = [
        'createMark' => 'CreateMark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createMark) {
            $res['CreateMark'] = $this->createMark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDiscoverDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateMark'])) {
            $model->createMark = $map['CreateMark'];
        }

        return $model;
    }
}
