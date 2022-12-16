<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeAckOperatorResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example deployed
     *
     * @var string
     */
    public $status;

    /**
     * @example 1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'status'  => 'status',
        'version' => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
