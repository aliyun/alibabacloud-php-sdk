<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListLogStoresResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $logstores;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'logstores' => 'logstores',
        'total'     => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logstores) {
            $res['logstores'] = $this->logstores;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLogStoresResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['logstores'])) {
            if (!empty($map['logstores'])) {
                $model->logstores = $map['logstores'];
            }
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
