<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateDevicePurifyJobByPlanIdRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var int
     */
    public $utc;
    protected $_name = [
        'apiProduct'  => 'ApiProduct',
        'apiRevision' => 'ApiRevision',
        'planId'      => 'PlanId',
        'utc'         => 'Utc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->utc) {
            $res['Utc'] = $this->utc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDevicePurifyJobByPlanIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['Utc'])) {
            $model->utc = $map['Utc'];
        }

        return $model;
    }
}
