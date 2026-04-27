<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DocumentParseService\V20260414\Models\DocumentParseOnlineApiResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DocumentParseService\V20260414\Models\DocumentParseOnlineApiResponseBody\data\usage;

class data extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'content' => 'Content',
        'requestId' => 'RequestId',
        'usage' => 'Usage',
    ];

    public function validate()
    {
        if (null !== $this->usage) {
            $this->usage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->usage) {
            $res['Usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Usage'])) {
            $model->usage = usage::fromMap($map['Usage']);
        }

        return $model;
    }
}
