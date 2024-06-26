<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class BatchAddAntChainMiniAppQRCodeAuthorizedUsersRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $antChainId;

    /**
     * @description This parameter is required.
     *
     * @var mixed[]
     */
    public $phoneList;
    protected $_name = [
        'antChainId' => 'AntChainId',
        'phoneList'  => 'PhoneList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->phoneList) {
            $res['PhoneList'] = $this->phoneList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddAntChainMiniAppQRCodeAuthorizedUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['PhoneList'])) {
            $model->phoneList = $map['PhoneList'];
        }

        return $model;
    }
}
