<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class RestartApplicationRequest extends Model
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
     * @description The ID of the elastic compute container (ECC) that corresponds to the ECS instance on which you want to restart the application. You can call the QueryApplicationStatus operation to query the ECC ID. For more information, see [QueryApplicationStatus](~~149394~~).
     *
     *   Separate multiple ECC IDs with commas (,).
     *   If you leave this parameter empty, the application will be restarted on all the ECS instances deployed with the application.
     *
     * @example 006c0ea5-5f8d-4398-af1e-**********
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
     * @return RestartApplicationRequest
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
