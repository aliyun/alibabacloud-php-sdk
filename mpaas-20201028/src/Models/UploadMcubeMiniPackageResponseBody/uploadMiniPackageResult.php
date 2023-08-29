<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\UploadMcubeMiniPackageResponseBody;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\UploadMcubeMiniPackageResponseBody\uploadMiniPackageResult\returnPackageResult;
use AlibabaCloud\Tea\Model;

class uploadMiniPackageResult extends Model
{
    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var returnPackageResult
     */
    public $returnPackageResult;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'resultMsg'           => 'ResultMsg',
        'returnPackageResult' => 'ReturnPackageResult',
        'success'             => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }
        if (null !== $this->returnPackageResult) {
            $res['ReturnPackageResult'] = null !== $this->returnPackageResult ? $this->returnPackageResult->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uploadMiniPackageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }
        if (isset($map['ReturnPackageResult'])) {
            $model->returnPackageResult = returnPackageResult::fromMap($map['ReturnPackageResult']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
