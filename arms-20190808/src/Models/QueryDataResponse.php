<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->results) {
            $res['results'] = $this->results;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['results'])) {
            $model->results = $map['results'];
        }

        return $model;
    }
}
