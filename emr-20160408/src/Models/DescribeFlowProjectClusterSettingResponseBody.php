<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowProjectClusterSettingResponseBody\hostList;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowProjectClusterSettingResponseBody\queueList;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowProjectClusterSettingResponseBody\userList;
use AlibabaCloud\Tea\Model;

class DescribeFlowProjectClusterSettingResponseBody extends Model
{
    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $defaultUser;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $defaultQueue;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var hostList
     */
    public $hostList;

    /**
     * @var userList
     */
    public $userList;

    /**
     * @var string
     */
    public $k8sClusterId;

    /**
     * @var queueList
     */
    public $queueList;
    protected $_name = [
        'gmtCreate'    => 'GmtCreate',
        'defaultUser'  => 'DefaultUser',
        'requestId'    => 'RequestId',
        'defaultQueue' => 'DefaultQueue',
        'clusterId'    => 'ClusterId',
        'projectId'    => 'ProjectId',
        'gmtModified'  => 'GmtModified',
        'hostList'     => 'HostList',
        'userList'     => 'UserList',
        'k8sClusterId' => 'K8sClusterId',
        'queueList'    => 'QueueList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->defaultUser) {
            $res['DefaultUser'] = $this->defaultUser;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->defaultQueue) {
            $res['DefaultQueue'] = $this->defaultQueue;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->hostList) {
            $res['HostList'] = null !== $this->hostList ? $this->hostList->toMap() : null;
        }
        if (null !== $this->userList) {
            $res['UserList'] = null !== $this->userList ? $this->userList->toMap() : null;
        }
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }
        if (null !== $this->queueList) {
            $res['QueueList'] = null !== $this->queueList ? $this->queueList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowProjectClusterSettingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['DefaultUser'])) {
            $model->defaultUser = $map['DefaultUser'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DefaultQueue'])) {
            $model->defaultQueue = $map['DefaultQueue'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HostList'])) {
            $model->hostList = hostList::fromMap($map['HostList']);
        }
        if (isset($map['UserList'])) {
            $model->userList = userList::fromMap($map['UserList']);
        }
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }
        if (isset($map['QueueList'])) {
            $model->queueList = queueList::fromMap($map['QueueList']);
        }

        return $model;
    }
}
