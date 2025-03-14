<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddCloudVendorTrialConfigRequest extends Model
{
    /**
     * @description Unique ID of the AK.
     *
     * > You can call [DescribeCloudVendorAccountAKList](~~DescribeCloudVendorAccountAKList~~) to get the AuthId.
     * > -
     *
     * This parameter is required.
     *
     * @example 2363
     *
     * @var int
     */
    public $authId;

    /**
     * @description Enter multi-cloud configuration information:
     * - *AWS*: Parameters include sqsQueueName, sqsRegion
     * - *Tencent*: Parameters include kafkaUserName, kafkaBootstrapServers, kafkaTopic
     *
     * This parameter is required.
     *
     * @example {\\"sqsRegion\\":\\"us-west-2\\",\\"sqsQueueName\\":\\"****\\"}
     *
     * @var string
     */
    public $authInfo;

    /**
     * @description Cloud asset vendor. Values:
     *
     * - **Tencent**: Tencent Cloud
     * - **AWS**: AWS (Note: The original text incorrectly states \\"Microsoft\\", which should be \\"AWS\\" based on context.)
     *
     * This parameter is required.
     *
     * @example Tencent
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'authId' => 'AuthId',
        'authInfo' => 'AuthInfo',
        'vendor' => 'Vendor',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authId) {
            $res['AuthId'] = $this->authId;
        }
        if (null !== $this->authInfo) {
            $res['AuthInfo'] = $this->authInfo;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCloudVendorTrialConfigRequest
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
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
