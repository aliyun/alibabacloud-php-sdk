<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\BatchCreateSmsSignResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $appliedNum;

    /**
     * @var int
     */
    public $availableNum;

    /**
     * @var string
     */
    public $batchCreateSmsSignResult;
    protected $_name = [
        'appliedNum' => 'AppliedNum',
        'availableNum' => 'AvailableNum',
        'batchCreateSmsSignResult' => 'BatchCreateSmsSignResult',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appliedNum) {
            $res['AppliedNum'] = $this->appliedNum;
        }

        if (null !== $this->availableNum) {
            $res['AvailableNum'] = $this->availableNum;
        }

        if (null !== $this->batchCreateSmsSignResult) {
            $res['BatchCreateSmsSignResult'] = $this->batchCreateSmsSignResult;
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
        if (isset($map['AppliedNum'])) {
            $model->appliedNum = $map['AppliedNum'];
        }

        if (isset($map['AvailableNum'])) {
            $model->availableNum = $map['AvailableNum'];
        }

        if (isset($map['BatchCreateSmsSignResult'])) {
            $model->batchCreateSmsSignResult = $map['BatchCreateSmsSignResult'];
        }

        return $model;
    }
}
