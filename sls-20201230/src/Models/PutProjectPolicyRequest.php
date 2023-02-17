<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class PutProjectPolicyRequest extends Model
{
    /**
     * @example { 	"Version": "1", 	"Statement": [{ 		"Action": ["log:PostLogStoreLogs"], 		"Resource": "acs:log:*:*:project/exampleproject/*", 		"Effect": "Deny", 		"Condition": { 			"StringNotLike": { 				"acs:SourceVpc": ["vpc-*"] 			} 		} 	}] }
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
     * @return PutProjectPolicyRequest
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
