<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCloudVendorTrialConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Multi-cloud configuration information:
     * - *AWS*: Output parameters sqsQueueName, sqsRegion
     * - *Tencent*: Output parameters kafkaUserName, kafkaBootstrapServers, kafkaTopic
     * @example {\\"sqsRegion\\":\\"us-west-2\\",\\"sqsQueueName\\":\\"****\\"}
     *
     * @var string
     */
    public $authInfo;

    /**
     * @description Error message returned when connection fails.
     *
     * @example No relevant queue found
     *
     * @var string
     */
    public $message;

    /**
     * @description The access status of the Trail configuration. Values:
     * - **init**: Initialization in progress
     * - **verify**: Configuration verification in progress
     * - **enable**: Configuration enabled
     * - **disable**: Configuration disabled
     * - **error**: Configuration access error
     * - **timeout**: Configuration access timeout
     * @example init
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'authInfo' => 'AuthInfo',
        'message'  => 'Message',
        'status'   => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authInfo) {
            $res['AuthInfo'] = $this->authInfo;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthInfo'])) {
            $model->authInfo = $map['AuthInfo'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
