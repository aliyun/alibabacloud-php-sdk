<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorSLSGroupRequest;

use AlibabaCloud\Tea\Model;

class SLSGroupConfig extends Model
{
    /**
     * @var string
     */
    public $SLSLogstore;

    /**
     * @var string
     */
    public $SLSProject;

    /**
     * @var string
     */
    public $SLSRegion;

    /**
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
