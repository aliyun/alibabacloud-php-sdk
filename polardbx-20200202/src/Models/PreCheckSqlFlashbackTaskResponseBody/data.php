<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\PreCheckSqlFlashbackTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\PreCheckSqlFlashbackTaskResponseBody\data\checkResult;

class data extends Model
{
    /**
     * @var checkResult
     */
    public $checkResult;
    protected $_name = [
        'checkResult' => 'CheckResult',
    ];

    public function validate()
    {
        if (null !== $this->checkResult) {
            $this->checkResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkResult) {
            $res['CheckResult'] = null !== $this->checkResult ? $this->checkResult->toArray($noStream) : $this->checkResult;
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
        if (isset($map['CheckResult'])) {
            $model->checkResult = checkResult::fromMap($map['CheckResult']);
        }

        return $model;
    }
}
