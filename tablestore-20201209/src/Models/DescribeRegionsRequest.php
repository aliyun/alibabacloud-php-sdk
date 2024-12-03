<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Tea\Model;

class DescribeRegionsRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * >  #### You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     * @example ETnLKlblzczshOTUbOCzxxxxxxxxxx
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'clientToken' => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRegionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
