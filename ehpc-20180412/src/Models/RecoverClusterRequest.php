<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class RecoverClusterRequest extends Model
{
    /**
     * @description The service type of the domain account. Valid values:
     *
     *   nis
     *   ldap
     *
     * Default value: nis
     * @example nis
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The version of the E-HPC client. The default value is the latest version of the client.
     *
     * You can call the [ListCurrentClientVersion](~~87223~~) operation to query the current version of the E-HPC client.
     * @example 1.0.76
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The ID of the cluster. The cluster must be in the Exception state.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID and status.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the image.
     *
     * You can call the [ListImages](~~87213~~) and [ListCustomImages](~~87215~~) operations to query the images that are supported by E-HPC.
     * @example m-bp18133n0335yq****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The type of the image. Valid values:
     *
     *   system: public image
     *   self: custom image
     *   others: shared image
     *
     * Default value: system
     * @example system
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description The image tag of the operating system.
     *
     * You can call the [ListImages](~~87213~~) and [ListCustomImages](~~87215~~) operations to query the image tags supported by Elastic High Performance Computing (E-HPC).
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $osTag;

    /**
     * @description The type of the scheduler. Valid values:
     *
     *   pbs
     *   slurm
     *   opengridscheduler
     *   deadline
     *
     * Default value: pbs
     * @example pbs
     *
     * @var string
     */
    public $schedulerType;
    protected $_name = [
        'accountType'     => 'AccountType',
        'clientVersion'   => 'ClientVersion',
        'clusterId'       => 'ClusterId',
        'imageId'         => 'ImageId',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'osTag'           => 'OsTag',
        'schedulerType'   => 'SchedulerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecoverClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }

        return $model;
    }
}
