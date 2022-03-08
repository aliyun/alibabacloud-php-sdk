<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20210101\Models;

use AlibabaCloud\Tea\Model;

class RpcDataUploadAndDownloadRequest extends Model
{
    /**
     * @var string
     */
    public $query1;
    protected $_name = [
        'query1' => 'query1',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->query1) {
            $res['query1'] = $this->query1;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RpcDataUploadAndDownloadRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['query1'])) {
            $model->query1 = $map['query1'];
        }

        return $model;
    }
}
