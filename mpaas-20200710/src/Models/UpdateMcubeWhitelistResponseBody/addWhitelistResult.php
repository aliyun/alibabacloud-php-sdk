<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20200710\Models\UpdateMcubeWhitelistResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\UpdateMcubeWhitelistResponseBody\addWhitelistResult\addWhitelistInfo;

class addWhitelistResult extends Model
{
    /**
     * @var addWhitelistInfo
     */
    public $addWhitelistInfo;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'addWhitelistInfo' => 'AddWhitelistInfo',
        'resultMsg' => 'ResultMsg',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->addWhitelistInfo) {
            $this->addWhitelistInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addWhitelistInfo) {
            $res['AddWhitelistInfo'] = null !== $this->addWhitelistInfo ? $this->addWhitelistInfo->toArray($noStream) : $this->addWhitelistInfo;
        }

        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['AddWhitelistInfo'])) {
            $model->addWhitelistInfo = addWhitelistInfo::fromMap($map['AddWhitelistInfo']);
        }

        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
