<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devs\V20230714\Models\ArtifactTempBucketToken\credentials;

class ArtifactTempBucketToken extends Model
{
    /**
     * @var credentials
     */
    public $credentials;

    /**
     * @var string
     */
    public $ossBucketName;

    /**
     * @var string
     */
    public $ossObjectName;

    /**
     * @var string
     */
    public $ossRegion;
    protected $_name = [
        'credentials' => 'credentials',
        'ossBucketName' => 'ossBucketName',
        'ossObjectName' => 'ossObjectName',
        'ossRegion' => 'ossRegion',
    ];

    public function validate()
    {
        if (null !== $this->credentials) {
            $this->credentials->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentials) {
            $res['credentials'] = null !== $this->credentials ? $this->credentials->toArray($noStream) : $this->credentials;
        }

        if (null !== $this->ossBucketName) {
            $res['ossBucketName'] = $this->ossBucketName;
        }

        if (null !== $this->ossObjectName) {
            $res['ossObjectName'] = $this->ossObjectName;
        }

        if (null !== $this->ossRegion) {
            $res['ossRegion'] = $this->ossRegion;
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
        if (isset($map['credentials'])) {
            $model->credentials = credentials::fromMap($map['credentials']);
        }

        if (isset($map['ossBucketName'])) {
            $model->ossBucketName = $map['ossBucketName'];
        }

        if (isset($map['ossObjectName'])) {
            $model->ossObjectName = $map['ossObjectName'];
        }

        if (isset($map['ossRegion'])) {
            $model->ossRegion = $map['ossRegion'];
        }

        return $model;
    }
}
