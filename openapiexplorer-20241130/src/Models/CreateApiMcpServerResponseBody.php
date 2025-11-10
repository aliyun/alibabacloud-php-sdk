<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\CreateApiMcpServerResponseBody\urls;

class CreateApiMcpServerResponseBody extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var urls
     */
    public $urls;
    protected $_name = [
        'id' => 'id',
        'requestId' => 'requestId',
        'urls' => 'urls',
    ];

    public function validate()
    {
        if (null !== $this->urls) {
            $this->urls->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->urls) {
            $res['urls'] = null !== $this->urls ? $this->urls->toArray($noStream) : $this->urls;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['urls'])) {
            $model->urls = urls::fromMap($map['urls']);
        }

        return $model;
    }
}
