<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20200710\Models\UploadMcubeMiniPackageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\UploadMcubeMiniPackageResponseBody\uploadMiniPackageResult\returnPackageResult;

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
        'resultMsg' => 'ResultMsg',
        'returnPackageResult' => 'ReturnPackageResult',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->returnPackageResult) {
            $this->returnPackageResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }

        if (null !== $this->returnPackageResult) {
            $res['ReturnPackageResult'] = null !== $this->returnPackageResult ? $this->returnPackageResult->toArray($noStream) : $this->returnPackageResult;
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
