<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class GetIoTCloudConnectorAccessLogResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessLogSlsLogStore;

    /**
     * @var string
     */
    public $accessLogSlsProject;

    /**
     * @var string
     */
    public $accessLogStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessLogSlsLogStore' => 'AccessLogSlsLogStore',
        'accessLogSlsProject'  => 'AccessLogSlsProject',
        'accessLogStatus'      => 'AccessLogStatus',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLogSlsLogStore) {
            $res['AccessLogSlsLogStore'] = $this->accessLogSlsLogStore;
        }
        if (null !== $this->accessLogSlsProject) {
            $res['AccessLogSlsProject'] = $this->accessLogSlsProject;
        }
        if (null !== $this->accessLogStatus) {
            $res['AccessLogStatus'] = $this->accessLogStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIoTCloudConnectorAccessLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessLogSlsLogStore'])) {
            $model->accessLogSlsLogStore = $map['AccessLogSlsLogStore'];
        }
        if (isset($map['AccessLogSlsProject'])) {
            $model->accessLogSlsProject = $map['AccessLogSlsProject'];
        }
        if (isset($map['AccessLogStatus'])) {
            $model->accessLogStatus = $map['AccessLogStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
