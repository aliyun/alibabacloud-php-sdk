<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class GetDeploymentBySelectorResponseBody extends Model
{
    /**
     * @description The queried workloads.
     *
     * @var int[][]
     */
    public $deploymentNameList;

    /**
     * @description The end-of-data marker.
     *
     * @example eyJ2IjoibWV0YS5rOHMuaW8vdjEiLCJydiI6NTgyMDUzMzk5MCwic3RhcnQiOiJwbXMtYWRhcHRlci1kZGxsXHUwMDA****
     *
     * @var string
     */
    public $mark;

    /**
     * @description The request ID.
     *
     * @example 946690C2-41D3-55A0-A501-E2FFAB5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deploymentNameList' => 'DeploymentNameList',
        'mark'               => 'Mark',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deploymentNameList) {
            $res['DeploymentNameList'] = $this->deploymentNameList;
        }
        if (null !== $this->mark) {
            $res['Mark'] = $this->mark;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeploymentBySelectorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeploymentNameList'])) {
            if (!empty($map['DeploymentNameList'])) {
                $model->deploymentNameList = $map['DeploymentNameList'];
            }
        }
        if (isset($map['Mark'])) {
            $model->mark = $map['Mark'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
