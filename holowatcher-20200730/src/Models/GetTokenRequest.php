<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class GetTokenRequest extends Model
{
    /**
     * @var string
     */
    public $pathType;
    protected $_name = [
        'pathType' => 'PathType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pathType) {
            $res['PathType'] = $this->pathType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PathType'])) {
            $model->pathType = $map['PathType'];
        }

        return $model;
    }
}
