<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class CreateProjectRequest extends Model
{
    /**
     * @description The request body parameters.
     *
     * @example { "name": "project_name", "comment": "", "productType":"payasyougo/subscription/dev", /\\*\\* \\* "PAYASYOUGO": specifies a pay-as-you-go project. \\* "SUBSCRIPTION": specifies a subscription project. \\* "DEV": specifies that the project is created in Developer Edition. \\*\/ "defaultQuota": "quota_nick_name", "properties": { "sqlMeteringMax":"", "typeSystem": "",// The string type. Valid values: 1, 2, and hive. "encryption": { "enable": true, "algorithm":"" , // The name of the encryption algorithm. "key":"" // The key of the encryption algorithm. } // json: This field is required only when data encryption is enabled. } }
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
     * @return CreateProjectRequest
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
