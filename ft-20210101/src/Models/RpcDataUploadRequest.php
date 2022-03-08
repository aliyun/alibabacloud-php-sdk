<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20210101\Models;

use AlibabaCloud\Tea\Model;

class RpcDataUploadRequest extends Model
{
    /**
     * @var string
     */
    public $largeParam;

    /**
     * @var string
     */
    public $query1;

    /**
     * @var int
     */
    public $query2;
    protected $_name = [
        'largeParam' => 'largeParam',
        'query1'     => 'query1',
        'query2'     => 'query2',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->largeParam) {
            $res['largeParam'] = $this->largeParam;
        }
        if (null !== $this->query1) {
            $res['query1'] = $this->query1;
        }
        if (null !== $this->query2) {
            $res['query2'] = $this->query2;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RpcDataUploadRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['largeParam'])) {
            $model->largeParam = $map['largeParam'];
        }
        if (isset($map['query1'])) {
            $model->query1 = $map['query1'];
        }
        if (isset($map['query2'])) {
            $model->query2 = $map['query2'];
        }

        return $model;
    }
}
