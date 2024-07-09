<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class ListReleaseVersionsRequest extends Model
{
    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the version.
     *
     * Valid values:
     *
     *   stable
     *   beta
     *
     * @example stable
     *
     * @var string
     */
    public $releaseType;

    /**
     * @description The version of Serverless Spark.
     *
     * @example esr-2.1 (Spark 3.3.1, Scala 2.12, Java Runtime)
     *
     * @var string
     */
    public $releaseVersion;

    /**
     * @description The status of the version. Valid values:
     *
     * Valid values:
     *
     *   ONLINE
     *   OFFLINE
     *
     * @example ONLINE
     *
     * @var string
     */
    public $releaseVersionStatus;
    protected $_name = [
        'regionId'             => 'regionId',
        'releaseType'          => 'releaseType',
        'releaseVersion'       => 'releaseVersion',
        'releaseVersionStatus' => 'releaseVersionStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->releaseType) {
            $res['releaseType'] = $this->releaseType;
        }
        if (null !== $this->releaseVersion) {
            $res['releaseVersion'] = $this->releaseVersion;
        }
        if (null !== $this->releaseVersionStatus) {
            $res['releaseVersionStatus'] = $this->releaseVersionStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListReleaseVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['releaseType'])) {
            $model->releaseType = $map['releaseType'];
        }
        if (isset($map['releaseVersion'])) {
            $model->releaseVersion = $map['releaseVersion'];
        }
        if (isset($map['releaseVersionStatus'])) {
            $model->releaseVersionStatus = $map['releaseVersionStatus'];
        }

        return $model;
    }
}
