<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableEngineVersionResponseBody\engineVersions;

class DescribeAvailableEngineVersionResponseBody extends Model
{
    /**
     * @var engineVersions
     */
    public $engineVersions;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'engineVersions' => 'EngineVersions',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->engineVersions) {
            $this->engineVersions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->engineVersions) {
            $res['EngineVersions'] = null !== $this->engineVersions ? $this->engineVersions->toArray($noStream) : $this->engineVersions;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['EngineVersions'])) {
            $model->engineVersions = engineVersions::fromMap($map['EngineVersions']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
