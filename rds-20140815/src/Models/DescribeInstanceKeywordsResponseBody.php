<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeInstanceKeywordsResponseBody\words;

class DescribeInstanceKeywordsResponseBody extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var words
     */
    public $words;
    protected $_name = [
        'key' => 'Key',
        'requestId' => 'RequestId',
        'words' => 'Words',
    ];

    public function validate()
    {
        if (null !== $this->words) {
            $this->words->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->words) {
            $res['Words'] = null !== $this->words ? $this->words->toArray($noStream) : $this->words;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
