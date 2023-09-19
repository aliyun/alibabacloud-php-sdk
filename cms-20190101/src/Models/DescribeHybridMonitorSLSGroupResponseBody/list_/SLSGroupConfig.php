<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorSLSGroupResponseBody\list_;

use AlibabaCloud\Tea\Model;

class SLSGroupConfig extends Model
{
    /**
     * @description The Logstore.
     *
     * @example Logstore-aliyun-all
     *
     * @var string
     */
    public $SLSLogstore;

    /**
     * @description The Simple Log Service project.
     *
     * @example aliyun-project
     *
     * @var string
     */
    public $SLSProject;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $SLSRegion;

    /**
     * @description The member ID.
     *
     **Description** This parameter is returned when you call the operation by using an administrative account.
     *
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
