<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class EnableExtensionRequest extends Model
{
    /**
     * @example ext-5d53a4fb1c9d446e2075a2cc
     *
     * @var string
     */
    public $extensionId;
    protected $_name = [
        'extensionId' => 'ExtensionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extensionId) {
            $res['ExtensionId'] = $this->extensionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableExtensionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtensionId'])) {
            $model->extensionId = $map['ExtensionId'];
        }

        return $model;
    }
}
