<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\UploadMcubeMiniPackageResponseBody\uploadMiniPackageResult;

use AlibabaCloud\Tea\Model;

class returnPackageResult extends Model
{
    /**
     * @var string
     */
    public $debugUrl;

    /**
     * @var string
     */
    public $packageId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'debugUrl'  => 'DebugUrl',
        'packageId' => 'PackageId',
        'userId'    => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->debugUrl) {
            $res['DebugUrl'] = $this->debugUrl;
        }
        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return returnPackageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DebugUrl'])) {
            $model->debugUrl = $map['DebugUrl'];
        }
        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
