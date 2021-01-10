<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeInvocationLogRequest extends Model
{
    /**
     * @var string
     */
    public $invocationId;

    /**
     * @var string
     */
    public $pages;
    protected $_name = [
        'invocationId' => 'InvocationId',
        'pages'        => 'Pages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invocationId) {
            $res['InvocationId'] = $this->invocationId;
        }
        if (null !== $this->pages) {
            $res['Pages'] = $this->pages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInvocationLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvocationId'])) {
            $model->invocationId = $map['InvocationId'];
        }
        if (isset($map['Pages'])) {
            $model->pages = $map['Pages'];
        }

        return $model;
    }
}
