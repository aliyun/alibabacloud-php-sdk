<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableEngineVersionResponseBody\engineVersions;
use AlibabaCloud\Tea\Model;

class DescribeAvailableEngineVersionResponseBody extends Model
{
    /**
     * @description The list of one or more engine versions to which an ApsaraDB for MongoDB instance can be upgraded.
     *
     * >  An empty string is returned if the latest version is being used.
     * @var engineVersions
     */
    public $engineVersions;

    /**
     * @description The ID of the request.
     *
     * @example 52507B6B-003B-47A3-A0A3-9FE992C7A243
     *
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
