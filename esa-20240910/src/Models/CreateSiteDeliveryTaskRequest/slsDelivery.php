<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteDeliveryTaskRequest;

use AlibabaCloud\Tea\Model;

class slsDelivery extends Model
{
    /**
     * @var string
     */
    public $SLSLogStore;

    /**
     * @var string
     */
    public $SLSProject;

    /**
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
