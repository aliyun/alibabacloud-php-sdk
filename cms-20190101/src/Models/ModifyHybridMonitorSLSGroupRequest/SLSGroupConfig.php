<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorSLSGroupRequest;

use AlibabaCloud\Tea\Model;

class SLSGroupConfig extends Model
{
    /**
     * @description The name of the Logstore group.
     *
     * For information about how to obtain the name of a Logstore group, see [DescribeHybridMonitorSLSGroup](~~429526~~).
     * @example Logstore-aliyun-all
     *
     * @var string
     */
    public $SLSLogstore;

    /**
     * @description The IDs of the member accounts.
     *
     * >  If a member uses CloudMonitor for the first time, you must make sure that the service-linked role AliyunServiceRoleForCloudMonitor is attached to the member. For more information, see [Manage the service-linked role for CloudMonitor](~~170423~~).
     * @example aliyun-project
     *
     * @var string
     */
    public $SLSProject;

    /**
     * @description The error message.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $SLSRegion;

    /**
     * @description The Logstores.
     *
     * Valid values of N: 1 to 25.
     * @example 120886317861****
     *
     * @var string
     */
    public $SLSUserId;
    protected $_name = [
        'SLSLogstore' => 'SLSLogstore',
        'SLSProject'  => 'SLSProject',
        'SLSRegion'   => 'SLSRegion',
        'SLSUserId'   => 'SLSUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SLSLogstore) {
            $res['SLSLogstore'] = $this->SLSLogstore;
        }
        if (null !== $this->SLSProject) {
            $res['SLSProject'] = $this->SLSProject;
        }
        if (null !== $this->SLSRegion) {
            $res['SLSRegion'] = $this->SLSRegion;
        }
        if (null !== $this->SLSUserId) {
            $res['SLSUserId'] = $this->SLSUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SLSGroupConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SLSLogstore'])) {
            $model->SLSLogstore = $map['SLSLogstore'];
        }
        if (isset($map['SLSProject'])) {
            $model->SLSProject = $map['SLSProject'];
        }
        if (isset($map['SLSRegion'])) {
            $model->SLSRegion = $map['SLSRegion'];
        }
        if (isset($map['SLSUserId'])) {
            $model->SLSUserId = $map['SLSUserId'];
        }

        return $model;
    }
}
