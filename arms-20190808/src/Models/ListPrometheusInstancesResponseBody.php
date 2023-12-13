<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListPrometheusInstancesResponseBody extends Model
{
    /**
     * @description The status code. The status code 200 indicates that the request was successful.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The Prometheus instances in the region in the JSON format.
     *
     * @example [{"agentStatus":"0","clusterId":"global-v2-cn-1672753017899-dmjnwtzz","clusterName":"test-GlobalView","clusterType":"GlobalViewV2","commercialConfig":{},"createTime":1656579981000,"id":13785300,"isAdvancedClusterInstalled":false,"isClusterRunning":true,"isControllerInstalled":true,"isIntegrationCenter":false,"regionId":"cn-hongkong","updateTime":1657616273000,"userId":"1672753017899"},{"agentStatus":"0","clusterId":"51a123a61a8f31f0","clusterName":"cloud-product-prometheus_cn-qingdao","clusterType":"cloud-product-prometheus","commercialConfig":{},"controllerId":"51a123a61a8f31f0","createTime":1653532488000,"id":13746658,"isAdvancedClusterInstalled":false,"isClusterRunning":true,"isControllerInstalled":true,"isIntegrationCenter":false,"regionId":"cn-qingdao","updateTime":1653532518000,"userId":"1672753017899"}]
     *
     * @var string
     */
    public $data;

    /**
     * @description The returned message.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID. You can use the ID to query logs and troubleshoot issues.
     *
     * @example E9C9DA3D-10FE-472E-9EEF-2D0A3E41****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPrometheusInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
