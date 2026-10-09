<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class GetSupabaseUpdateVersionResponseBody extends Model
{
    /**
     * @var string
     */
    public $latestVersion;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $stableVersion;
    protected $_name = [
        'latestVersion' => 'LatestVersion',
        'projectId' => 'ProjectId',
        'requestId' => 'RequestId',
        'stableVersion' => 'StableVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = $this->latestVersion;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stableVersion) {
            $res['StableVersion'] = $this->stableVersion;
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
        if (isset($map['LatestVersion'])) {
            $model->latestVersion = $map['LatestVersion'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StableVersion'])) {
            $model->stableVersion = $map['StableVersion'];
        }

        return $model;
    }
}
