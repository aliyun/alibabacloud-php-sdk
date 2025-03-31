<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppVersionResponseBody\version;

class GetEdgeContainerAppVersionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var version
     */
    public $version;
    protected $_name = [
        'requestId' => 'RequestId',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->version) {
            $this->version->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->version) {
            $res['Version'] = null !== $this->version ? $this->version->toArray($noStream) : $this->version;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Version'])) {
            $model->version = version::fromMap($map['Version']);
        }

        return $model;
    }
}
