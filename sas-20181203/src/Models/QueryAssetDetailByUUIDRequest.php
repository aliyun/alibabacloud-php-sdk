<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class QueryAssetDetailByUUIDRequest extends Model
{
    /**
     * @description A key-value pair that consists of the user ID and the asset list.
     *
     * @example {
     * "AliUid": "176618589410****",
     * "UuidList": [
     * "429fe207-3014-40c6-972b-cdff1d7a****",
     * "429fe207-3014-40c6-972b-cdff1d7b****",
     * "429fe207-3014-40c6-972b-cdff1d7c****"
     * }
     * @var string
     */
    public $requests;
    protected $_name = [
        'requests' => 'Requests',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requests) {
            $res['Requests'] = $this->requests;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAssetDetailByUUIDRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Requests'])) {
            $model->requests = $map['Requests'];
        }

        return $model;
    }
}
