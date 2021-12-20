<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class PutBucketVersioningRequest extends Model
{
    /**
     * @var VersioningConfiguration
     */
    public $versioningConfiguration;
    protected $_name = [
        'versioningConfiguration' => 'VersioningConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versioningConfiguration) {
            $res['VersioningConfiguration'] = null !== $this->versioningConfiguration ? $this->versioningConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutBucketVersioningRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VersioningConfiguration'])) {
            $model->versioningConfiguration = VersioningConfiguration::fromMap($map['VersioningConfiguration']);
        }

        return $model;
    }
}
