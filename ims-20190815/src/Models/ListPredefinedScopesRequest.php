<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class ListPredefinedScopesRequest extends Model
{
    /**
     * @description The type of the application. Valid values:
     *
     *   WebApp
     *   NativeApp
     *   ServerApp
     *
     * If this parameter is empty, the permissions on all types of applications are queried.
     * @example WebApp
     *
     * @var string
     */
    public $appType;
    protected $_name = [
        'appType' => 'AppType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPredefinedScopesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        return $model;
    }
}
