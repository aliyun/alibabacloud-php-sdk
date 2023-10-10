<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ScaleInApplicationRequest extends Model
{
    /**
     * @description The ID of the application. You can call the ListApplication operation to query the application ID. For more information, see [ListApplication](~~149390~~).
     *
     * @example 3616cdca-4f92-44***********************
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the elastic compute container (ECC) that corresponds to the Elastic Compute Service (ECS) instance to be removed for the application. Separate multiple ECC IDs with commas (,). You can call the QueryApplicationStatus operation to query the ECC ID. For more information, see [QueryApplicationStatus](~~149394~~).
     *
     * @example 7040f221-42df-48e8-9*******************
     *
     * @var string
     */
    public $eccInfo;

    /**
     * @description Specifies whether to forcibly unpublish the application from the ECS instance. You need to set this parameter to true only if the ECS instance expires. In normal cases, you do not need to set this parameter to true.
     *
     * @example false
     *
     * @var bool
     */
    public $forceStatus;
    protected $_name = [
        'appId'       => 'AppId',
        'eccInfo'     => 'EccInfo',
        'forceStatus' => 'ForceStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->eccInfo) {
            $res['EccInfo'] = $this->eccInfo;
        }
        if (null !== $this->forceStatus) {
            $res['ForceStatus'] = $this->forceStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScaleInApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EccInfo'])) {
            $model->eccInfo = $map['EccInfo'];
        }
        if (isset($map['ForceStatus'])) {
            $model->forceStatus = $map['ForceStatus'];
        }

        return $model;
    }
}
