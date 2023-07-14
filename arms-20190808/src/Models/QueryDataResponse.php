<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class QueryDataResponse extends Model
{
    /**
     * @var string
     */
    public $results;
    protected $_name = [
        'results' => 'results',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->results) {
            $res['results'] = $this->results;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDataResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['results'])) {
            $model->results = $map['results'];
        }

        return $model;
    }
}
