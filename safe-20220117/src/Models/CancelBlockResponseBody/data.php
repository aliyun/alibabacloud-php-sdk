<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\CancelBlockResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $approveInstanceId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'approveInstanceId' => 'ApproveInstanceId',
        'success' => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approveInstanceId) {
            $res['ApproveInstanceId'] = $this->approveInstanceId;
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
        if (isset($map['ApproveInstanceId'])) {
            $model->approveInstanceId = $map['ApproveInstanceId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
