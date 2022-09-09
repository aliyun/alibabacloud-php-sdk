<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\GetModuleVersionResponseBody\version;
use AlibabaCloud\Tea\Model;

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
        'version'   => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->version) {
            $res['version'] = null !== $this->version ? $this->version->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetModuleVersionResponseBody
     */
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
