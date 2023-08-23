<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class CreatePackageRequest extends Model
{
    /**
     * @description The request body parameters.
     *
     * @example {
     * }
     * @var string
     */
    public $body;

    /**
     * @description Specifies whether to install the package.
     *
     * @example false
     *
     * @var bool
     */
    public $isInstall;
    protected $_name = [
        'body'      => 'body',
        'isInstall' => 'isInstall',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->isInstall) {
            $res['isInstall'] = $this->isInstall;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['isInstall'])) {
            $model->isInstall = $map['isInstall'];
        }

        return $model;
    }
}
