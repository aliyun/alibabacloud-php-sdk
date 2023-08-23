<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class UpdateProjectIpWhiteListRequest extends Model
{
    /**
     * @description The request body parameters.
     *
     * @example json {"ipWhiteList":{"ipList": "", // The IP address whitelists are of the STRING data type. Separate multiple IP address whitelists with commas (,). "vpcIpList": "", //} }
     *
     * @var string
     */
    public $body;
    protected $_name = [
        'body' => 'body',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProjectIpWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
