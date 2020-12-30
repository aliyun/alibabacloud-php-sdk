<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeConfigOfVersionResponseBody\versionConfigs;
use AlibabaCloud\Tea\Model;

class DescribeConfigOfVersionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var versionConfigs
     */
    public $versionConfigs;
    protected $_name = [
        'requestId'      => 'RequestId',
        'versionConfigs' => 'VersionConfigs',
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
        if (null !== $this->versionConfigs) {
            $res['VersionConfigs'] = null !== $this->versionConfigs ? $this->versionConfigs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConfigOfVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VersionConfigs'])) {
            $model->versionConfigs = versionConfigs::fromMap($map['VersionConfigs']);
        }

        return $model;
    }
}
