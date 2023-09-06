<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class ListCalendarsRequest extends Model
{
    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $request;
    protected $_name = [
        'request' => 'Request',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->request) {
            $res['Request'] = $this->request;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCalendarsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Request'])) {
            $model->request = $map['Request'];
        }

        return $model;
    }
}
