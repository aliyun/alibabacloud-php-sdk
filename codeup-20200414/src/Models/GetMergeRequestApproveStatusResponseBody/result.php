<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\GetMergeRequestApproveStatusResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $approveStatus;
    protected $_name = [
        'message'       => 'Message',
        'approveStatus' => 'ApproveStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->approveStatus) {
            $res['ApproveStatus'] = $this->approveStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ApproveStatus'])) {
            $model->approveStatus = $map['ApproveStatus'];
        }

        return $model;
    }
}
