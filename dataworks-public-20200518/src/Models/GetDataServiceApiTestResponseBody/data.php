<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceApiTestResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the API on which the test is performed.
     *
     * @example 12343
     *
     * @var int
     */
    public $apiId;

    /**
     * @description The time consumed for the test.
     *
     * @example 10
     *
     * @var string
     */
    public $costTime;

    /**
     * @description The debugging information.
     *
     * @example [<span style=\"color: #92D581;\">INFO</span>] [16:15:13.240] resource group is 498774069027041[<span style=\"color: #92D581;\">INFO</span>]
     *
     * @var string
     */
    public $debugInfo;

    /**
     * @example [<span style=\"color: #92D581;\">INFO</span>] [16:15:13.240] resource group is 498774069027041[<span style=\"color: #92D581;\">INFO</span>]
     *
     * @var string
     */
    public $nodesDebugInfo;

    /**
     * @description The request parameters configured for the test.
     *
     * @example {"name":"test"}
     *
     * @var string
     */
    public $paramMap;

    /**
     * @description The status code returned for the test. If the test is not complete, this parameter is not returned.
     *
     * @example 0
     *
     * @var int
     */
    public $retCode;

    /**
     * @description The result returned for the test.
     *
     * @example {"id":2}
     *
     * @var string
     */
    public $retResult;

    /**
     * @description The status of the test. Valid values: RUNNING and FINISHED.
     *
     * @example FINISHED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'apiId'          => 'ApiId',
        'costTime'       => 'CostTime',
        'debugInfo'      => 'DebugInfo',
        'nodesDebugInfo' => 'NodesDebugInfo',
        'paramMap'       => 'ParamMap',
        'retCode'        => 'RetCode',
        'retResult'      => 'RetResult',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->costTime) {
            $res['CostTime'] = $this->costTime;
        }
        if (null !== $this->debugInfo) {
            $res['DebugInfo'] = $this->debugInfo;
        }
        if (null !== $this->nodesDebugInfo) {
            $res['NodesDebugInfo'] = $this->nodesDebugInfo;
        }
        if (null !== $this->paramMap) {
            $res['ParamMap'] = $this->paramMap;
        }
        if (null !== $this->retCode) {
            $res['RetCode'] = $this->retCode;
        }
        if (null !== $this->retResult) {
            $res['RetResult'] = $this->retResult;
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['CostTime'])) {
            $model->costTime = $map['CostTime'];
        }
        if (isset($map['DebugInfo'])) {
            $model->debugInfo = $map['DebugInfo'];
        }
        if (isset($map['NodesDebugInfo'])) {
            $model->nodesDebugInfo = $map['NodesDebugInfo'];
        }
        if (isset($map['ParamMap'])) {
            $model->paramMap = $map['ParamMap'];
        }
        if (isset($map['RetCode'])) {
            $model->retCode = $map['RetCode'];
        }
        if (isset($map['RetResult'])) {
            $model->retResult = $map['RetResult'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
