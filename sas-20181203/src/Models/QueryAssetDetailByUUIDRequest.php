<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class QueryAssetDetailByUUIDRequest extends Model
{
    /**
     * @var string
     */
    public $requests;
    protected $_name = [
        'requests' => 'Requests',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requests) {
            $res['Requests'] = $this->requests;
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
        if (isset($map['Requests'])) {
            $model->requests = $map['Requests'];
        }

        return $model;
    }
}
