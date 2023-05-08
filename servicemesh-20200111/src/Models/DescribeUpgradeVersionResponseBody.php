<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeUpgradeVersionResponseBody\version;
use AlibabaCloud\Tea\Model;

class DescribeUpgradeVersionResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 11fd0027-c27e-41bb-a565-75583054****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The version information.
     *
     * @var version
     */
    public $version;
    protected $_name = [
        'requestId' => 'RequestId',
        'version'   => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->version) {
            $res['Version'] = null !== $this->version ? $this->version->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUpgradeVersionResponseBody
     */
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
