<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class StopApplicationRequest extends Model
{
    /**
     * @description The ID of the application. You can call the ListApplication operation to query the application ID. For more information, see [ListApplication](~~149390~~).
     *
     * @example c627c157-560d*******
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the elastic compute container (ECC) that corresponds to the Elastic Compute Service (ECS) instance on which you want to stop the application. You can call the QueryApplicationStatus operation to query the ECC ID. For more information, see [QueryApplicationStatus](~~149394~~).
     *
     *   If you want to stop the application on multiple ECS instances, separate the ECC IDs with commas (,).
     *   If you leave this parameter empty, the application will be stopped on all ECS instances.
     *
     * @example 74ee9166-****1f6-bcb60e5b****
     *
     * @var string
     */
    public $eccInfo;
    protected $_name = [
        'appId'   => 'AppId',
        'eccInfo' => 'EccInfo',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopApplicationRequest
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

        return $model;
    }
}
