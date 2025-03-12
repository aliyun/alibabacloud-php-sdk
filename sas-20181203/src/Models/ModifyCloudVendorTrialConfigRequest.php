<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyCloudVendorTrialConfigRequest extends Model
{
    /**
     * @description The ID of the audit log configuration to be modified.
     * This parameter is required.
     * @example 23**
     *
     * @var int
     */
    public $authId;

    /**
     * @description Enter the multi-cloud configuration information:
     * - Tencent: parameters kafkaUserName, kafkaBootstrapServers, kafkaTopic
     * @example {\\"sqsRegion\\":\\"us-west-2\\",\\"sqsQueueName\\":\\"****\\"}
     *
     * @var string
     */
    public $authInfo;

    /**
     * @description Whether to delete this audit log configuration:
     * - false: Do not delete
     * @example true
     *
     * @var bool
     */
    public $deleteTrail;

    /**
     * @description Cloud asset vendor. Values:
     *
     * - **Tencent**: Tencent Cloud
     * - **AWS**: AWS
     *
     * This parameter is required.
     * @example Tencent
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'authId'      => 'AuthId',
        'authInfo'    => 'AuthInfo',
        'deleteTrail' => 'DeleteTrail',
        'vendor'      => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authId) {
            $res['AuthId'] = $this->authId;
        }
        if (null !== $this->authInfo) {
            $res['AuthInfo'] = $this->authInfo;
        }
        if (null !== $this->deleteTrail) {
            $res['DeleteTrail'] = $this->deleteTrail;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCloudVendorTrialConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthId'])) {
            $model->authId = $map['AuthId'];
        }
        if (isset($map['AuthInfo'])) {
            $model->authInfo = $map['AuthInfo'];
        }
        if (isset($map['DeleteTrail'])) {
            $model->deleteTrail = $map['DeleteTrail'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
