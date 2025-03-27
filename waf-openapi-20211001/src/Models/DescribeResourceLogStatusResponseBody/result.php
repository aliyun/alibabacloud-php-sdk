<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResourceLogStatusResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $resource;

    /**
     * @var bool
     */
    public $status;
    protected $_name = [
        'resource' => 'Resource',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
