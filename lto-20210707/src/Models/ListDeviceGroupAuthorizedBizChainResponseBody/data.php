<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\ListDeviceGroupAuthorizedBizChainResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $authorized;

    /**
     * @var string
     */
    public $bizChainId;

    /**
     * @var string
     */
    public $bizChainName;

    /**
     * @var string
     */
    public $blockChainType;
    protected $_name = [
        'authorized' => 'Authorized',
        'bizChainId' => 'BizChainId',
        'bizChainName' => 'BizChainName',
        'blockChainType' => 'BlockChainType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorized) {
            $res['Authorized'] = $this->authorized;
        }

        if (null !== $this->bizChainId) {
            $res['BizChainId'] = $this->bizChainId;
        }

        if (null !== $this->bizChainName) {
            $res['BizChainName'] = $this->bizChainName;
        }

        if (null !== $this->blockChainType) {
            $res['BlockChainType'] = $this->blockChainType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Authorized'])) {
            $model->authorized = $map['Authorized'];
        }

        if (isset($map['BizChainId'])) {
            $model->bizChainId = $map['BizChainId'];
        }

        if (isset($map['BizChainName'])) {
            $model->bizChainName = $map['BizChainName'];
        }

        if (isset($map['BlockChainType'])) {
            $model->blockChainType = $map['BlockChainType'];
        }

        return $model;
    }
}
