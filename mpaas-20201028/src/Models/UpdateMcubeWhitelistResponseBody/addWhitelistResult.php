<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateMcubeWhitelistResponseBody;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateMcubeWhitelistResponseBody\addWhitelistResult\addWhitelistInfo;
use AlibabaCloud\Tea\Model;

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
        'resultMsg'        => 'ResultMsg',
        'success'          => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addWhitelistInfo) {
            $res['AddWhitelistInfo'] = null !== $this->addWhitelistInfo ? $this->addWhitelistInfo->toMap() : null;
        }
        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addWhitelistResult
     */
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
