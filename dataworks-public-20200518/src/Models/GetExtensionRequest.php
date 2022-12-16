<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetExtensionRequest extends Model
{
    /**
     * @example ce4*********086da5
     *
     * @var string
     */
    public $extensionCode;
    protected $_name = [
        'extensionCode' => 'ExtensionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extensionCode) {
            $res['ExtensionCode'] = $this->extensionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetExtensionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtensionCode'])) {
            $model->extensionCode = $map['ExtensionCode'];
        }

        return $model;
    }
}
