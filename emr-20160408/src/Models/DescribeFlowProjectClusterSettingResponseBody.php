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
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $defaultQueue;

    /**
     * @var string
     */
    public $defaultUser;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var hostList
     */
    public $hostList;

    /**
     * @var string
     */
    public $k8sClusterId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var queueList
     */
    public $queueList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userList
     */
    public $userList;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'defaultQueue' => 'DefaultQueue',
        'defaultUser'  => 'DefaultUser',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'hostList'     => 'HostList',
        'k8sClusterId' => 'K8sClusterId',
        'projectId'    => 'ProjectId',
        'queueList'    => 'QueueList',
        'requestId'    => 'RequestId',
        'userList'     => 'UserList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->defaultQueue) {
            $res['DefaultQueue'] = $this->defaultQueue;
        }
        if (null !== $this->defaultUser) {
            $res['DefaultUser'] = $this->defaultUser;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->hostList) {
            $res['HostList'] = null !== $this->hostList ? $this->hostList->toMap() : null;
        }
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->queueList) {
            $res['QueueList'] = null !== $this->queueList ? $this->queueList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userList) {
            $res['UserList'] = null !== $this->userList ? $this->userList->toMap() : null;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DefaultQueue'])) {
            $model->defaultQueue = $map['DefaultQueue'];
        }
        if (isset($map['DefaultUser'])) {
            $model->defaultUser = $map['DefaultUser'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HostList'])) {
            $model->hostList = hostList::fromMap($map['HostList']);
        }
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['QueueList'])) {
            $model->queueList = queueList::fromMap($map['QueueList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserList'])) {
            $model->userList = userList::fromMap($map['UserList']);
        }

        return $model;
    }
}
