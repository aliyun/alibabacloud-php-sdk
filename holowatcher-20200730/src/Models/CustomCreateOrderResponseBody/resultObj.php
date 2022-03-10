<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\CustomCreateOrderResponseBody;

use AlibabaCloud\Tea\Model;

class resultObj extends Model
{
    /**
     * @var string
     */
    public $cipherId;

    /**
     * @var string
     */
    public $cipherProjectId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $orderName;

    /**
     * @var string
     */
    public $orderState;
    protected $_name = [
        'cipherId'        => 'CipherId',
        'cipherProjectId' => 'CipherProjectId',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'orderName'       => 'OrderName',
        'orderState'      => 'OrderState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cipherId) {
            $res['CipherId'] = $this->cipherId;
        }
        if (null !== $this->cipherProjectId) {
            $res['CipherProjectId'] = $this->cipherProjectId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->orderName) {
            $res['OrderName'] = $this->orderName;
        }
        if (null !== $this->orderState) {
            $res['OrderState'] = $this->orderState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObj
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CipherId'])) {
            $model->cipherId = $map['CipherId'];
        }
        if (isset($map['CipherProjectId'])) {
            $model->cipherProjectId = $map['CipherProjectId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['OrderName'])) {
            $model->orderName = $map['OrderName'];
        }
        if (isset($map['OrderState'])) {
            $model->orderState = $map['OrderState'];
        }

        return $model;
    }
}
