<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScanCodeBindRequest;

use AlibabaCloud\Tea\Model;

class bindReq extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $extInfo;
    protected $_name = [
        'clientId' => 'ClientId',
        'code'     => 'Code',
        'extInfo'  => 'ExtInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bindReq
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }

        return $model;
    }
}
