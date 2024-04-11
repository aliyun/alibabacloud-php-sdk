<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceKeywordsResponseBody\words;
use AlibabaCloud\Tea\Model;

class DescribeInstanceKeywordsResponseBody extends Model
{
    /**
     * @description The type of reserved keyword returned.
     *
     * @example account
     *
     * @var string
     */
    public $key;

    /**
     * @description The ID of the request.
     *
     * @example 1E43AAE0-BEE8-43DA-860D-EAF2AA0724DC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The reserved keywords.
     *
     * @var words
     */
    public $words;
    protected $_name = [
        'key'       => 'Key',
        'requestId' => 'RequestId',
        'words'     => 'Words',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->words) {
            $res['Words'] = null !== $this->words ? $this->words->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceKeywordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Words'])) {
            $model->words = words::fromMap($map['Words']);
        }

        return $model;
    }
}
