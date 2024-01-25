<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetComponentVersionResponseBody\data;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @var mixed[]
     */
    public $limits;

    /**
     * @var mixed[]
     */
    public $requests;
    protected $_name = [
        'limits'   => 'limits',
        'requests' => 'requests',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limits) {
            $res['limits'] = $this->limits;
        }
        if (null !== $this->requests) {
            $res['requests'] = $this->requests;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limits'])) {
            $model->limits = $map['limits'];
        }
        if (isset($map['requests'])) {
            $model->requests = $map['requests'];
        }

        return $model;
    }
}
