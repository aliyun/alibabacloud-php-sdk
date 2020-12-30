<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\preCheckDetail;

use AlibabaCloud\Tea\Model;

class taskCheckDO extends Model
{
    /**
     * @var string
     */
    public $userTip;

    /**
     * @var string
     */
    public $checkStatus;

    /**
     * @var string
     */
    public $checkStep;
    protected $_name = [
        'userTip'     => 'UserTip',
        'checkStatus' => 'CheckStatus',
        'checkStep'   => 'CheckStep',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userTip) {
            $res['UserTip'] = $this->userTip;
        }
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }
        if (null !== $this->checkStep) {
            $res['CheckStep'] = $this->checkStep;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskCheckDO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserTip'])) {
            $model->userTip = $map['UserTip'];
        }
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['CheckStep'])) {
            $model->checkStep = $map['CheckStep'];
        }

        return $model;
    }
}
