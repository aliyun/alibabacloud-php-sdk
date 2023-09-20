<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainsResponseBody\domains\backeds;

use AlibabaCloud\Tea\Model;

class http extends Model
{
    /**
     * @description The HTTP address of the origin server.
     *
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $backend;
    protected $_name = [
        'backend' => 'Backend',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backend) {
            $res['Backend'] = $this->backend;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return http
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Backend'])) {
            $model->backend = $map['Backend'];
        }

        return $model;
    }
}
