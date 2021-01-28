<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnConfigOfVersionResponseBody\versionConfigs;
use AlibabaCloud\Tea\Model;

class DescribeDcdnConfigOfVersionResponseBody extends Model
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
     * @return DescribeDcdnConfigOfVersionResponseBody
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
