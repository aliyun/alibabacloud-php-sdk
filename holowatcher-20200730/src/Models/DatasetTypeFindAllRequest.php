<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class DatasetTypeFindAllRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunJwt;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $sort;
    protected $_name = [
        'aliyunJwt' => 'AliyunJwt',
        'size'      => 'Size',
        'sort'      => 'Sort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunJwt) {
            $res['AliyunJwt'] = $this->aliyunJwt;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DatasetTypeFindAllRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunJwt'])) {
            $model->aliyunJwt = $map['AliyunJwt'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        return $model;
    }
}
