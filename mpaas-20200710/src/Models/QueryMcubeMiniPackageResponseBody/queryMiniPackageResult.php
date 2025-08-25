<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20200710\Models\QueryMcubeMiniPackageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\QueryMcubeMiniPackageResponseBody\queryMiniPackageResult\miniPackageInfo;

class queryMiniPackageResult extends Model
{
    /**
     * @var miniPackageInfo
     */
    public $miniPackageInfo;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'miniPackageInfo' => 'MiniPackageInfo',
        'resultMsg' => 'ResultMsg',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->miniPackageInfo) {
            $this->miniPackageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->miniPackageInfo) {
            $res['MiniPackageInfo'] = null !== $this->miniPackageInfo ? $this->miniPackageInfo->toArray($noStream) : $this->miniPackageInfo;
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
        if (isset($map['MiniPackageInfo'])) {
            $model->miniPackageInfo = miniPackageInfo::fromMap($map['MiniPackageInfo']);
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
