<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class ProjectFindAllRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunJwt;

    /**
     * @var string
     */
    public $jsonParams;
    protected $_name = [
        'aliyunJwt'  => 'AliyunJwt',
        'jsonParams' => 'JsonParams',
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
        if (null !== $this->jsonParams) {
            $res['JsonParams'] = $this->jsonParams;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProjectFindAllRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunJwt'])) {
            $model->aliyunJwt = $map['AliyunJwt'];
        }
        if (isset($map['JsonParams'])) {
            $model->jsonParams = $map['JsonParams'];
        }

        return $model;
    }
}
