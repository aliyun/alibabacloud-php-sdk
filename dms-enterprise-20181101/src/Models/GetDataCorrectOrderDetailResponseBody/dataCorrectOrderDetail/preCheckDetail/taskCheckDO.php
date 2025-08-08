<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\preCheckDetail;

use AlibabaCloud\Dara\Model;

class taskCheckDO extends Model
{
    /**
     * @var string
     */
    public $checkStatus;

    /**
     * @var string
     */
    public $checkStep;

    /**
     * @var string
     */
    public $userTip;
    protected $_name = [
        'checkStatus' => 'CheckStatus',
        'checkStep' => 'CheckStep',
        'userTip' => 'UserTip',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }

        if (null !== $this->checkStep) {
            $res['CheckStep'] = $this->checkStep;
        }

        if (null !== $this->userTip) {
            $res['UserTip'] = $this->userTip;
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
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }

        if (isset($map['CheckStep'])) {
            $model->checkStep = $map['CheckStep'];
        }

        if (isset($map['UserTip'])) {
            $model->userTip = $map['UserTip'];
        }

        return $model;
    }
}
