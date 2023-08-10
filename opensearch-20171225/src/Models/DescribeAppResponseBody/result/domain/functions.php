<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result\domain;

use AlibabaCloud\Tea\Model;

class functions extends Model
{
    /**
     * @example []
     *
     * @var string[]
     */
    public $algo;

    /**
     * @example []
     *
     * @var string[]
     */
    public $qp;

    /**
     * @example []
     *
     * @var string[]
     */
    public $service;
    protected $_name = [
        'algo'    => 'algo',
        'qp'      => 'qp',
        'service' => 'service',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algo) {
            $res['algo'] = $this->algo;
        }
        if (null !== $this->qp) {
            $res['qp'] = $this->qp;
        }
        if (null !== $this->service) {
            $res['service'] = $this->service;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return functions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['algo'])) {
            if (!empty($map['algo'])) {
                $model->algo = $map['algo'];
            }
        }
        if (isset($map['qp'])) {
            if (!empty($map['qp'])) {
                $model->qp = $map['qp'];
            }
        }
        if (isset($map['service'])) {
            if (!empty($map['service'])) {
                $model->service = $map['service'];
            }
        }

        return $model;
    }
}
