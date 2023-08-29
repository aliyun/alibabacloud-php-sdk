<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcubeMiniPackageResponseBody;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcubeMiniPackageResponseBody\queryMiniPackageResult\miniPackageInfo;
use AlibabaCloud\Tea\Model;

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
        'resultMsg'       => 'ResultMsg',
        'success'         => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->miniPackageInfo) {
            $res['MiniPackageInfo'] = null !== $this->miniPackageInfo ? $this->miniPackageInfo->toMap() : null;
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
     * @return queryMiniPackageResult
     */
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
