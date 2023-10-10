<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ResetApplicationRequest extends Model
{
    /**
     * @description The ID of the application. You can call the ListApplication operation to query the application ID. For more information, see [ListApplication](~~149390~~).
     *
     * @example 3616cdca-4f92*********
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the elastic compute container (ECC) for which you want to reset the application. Separate multiple ECC IDs with commas (,). You can call the QueryApplicationStatus operation to query the ECC ID. For more information, see [QueryApplicationStatus](~~149394~~).
     *
     * @example 0cf49a6c-***********
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
     * @return ResetApplicationRequest
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
