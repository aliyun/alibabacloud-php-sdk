<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest;

use AlibabaCloud\Tea\Model;

class slsDelivery extends Model
{
    /**
     * @description The name of the SLS Logstore.
     *
     * @example accesslog-test
     *
     * @var string
     */
    public $SLSLogStore;

    /**
     * @description The name of the SLS project.
     *
     * @example dcdn-test20240417
     *
     * @var string
     */
    public $SLSProject;

    /**
     * @description The region in which the SLS project resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $SLSRegion;
    protected $_name = [
        'SLSLogStore' => 'SLSLogStore',
        'SLSProject'  => 'SLSProject',
        'SLSRegion'   => 'SLSRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SLSLogStore) {
            $res['SLSLogStore'] = $this->SLSLogStore;
        }
        if (null !== $this->SLSProject) {
            $res['SLSProject'] = $this->SLSProject;
        }
        if (null !== $this->SLSRegion) {
            $res['SLSRegion'] = $this->SLSRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slsDelivery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SLSLogStore'])) {
            $model->SLSLogStore = $map['SLSLogStore'];
        }
        if (isset($map['SLSProject'])) {
            $model->SLSProject = $map['SLSProject'];
        }
        if (isset($map['SLSRegion'])) {
            $model->SLSRegion = $map['SLSRegion'];
        }

        return $model;
    }
}
