<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableEngineVersionResponseBody\engineVersions;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engineVersions) {
            $res['EngineVersions'] = null !== $this->engineVersions ? $this->engineVersions->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAvailableEngineVersionResponseBody
     */
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
