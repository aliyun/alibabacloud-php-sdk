<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetModuleVersionResponseBody\version;

class GetModuleVersionResponseBody extends Model
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
        'requestId' => 'requestId',
        'version' => 'version',
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
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->version) {
            $res['version'] = null !== $this->version ? $this->version->toArray($noStream) : $this->version;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['version'])) {
            $model->version = version::fromMap($map['version']);
        }

        return $model;
    }
}
