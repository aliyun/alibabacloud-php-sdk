<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeStartResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $approveResultUrl;

    /**
     * @var string
     */
    public $checkResultUrl;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subSatus;
    protected $_name = [
        'approveResultUrl' => 'ApproveResultUrl',
        'checkResultUrl' => 'CheckResultUrl',
        'status' => 'Status',
        'subSatus' => 'SubSatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approveResultUrl) {
            $res['ApproveResultUrl'] = $this->approveResultUrl;
        }

        if (null !== $this->checkResultUrl) {
            $res['CheckResultUrl'] = $this->checkResultUrl;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subSatus) {
            $res['SubSatus'] = $this->subSatus;
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
        if (isset($map['ApproveResultUrl'])) {
            $model->approveResultUrl = $map['ApproveResultUrl'];
        }

        if (isset($map['CheckResultUrl'])) {
            $model->checkResultUrl = $map['CheckResultUrl'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubSatus'])) {
            $model->subSatus = $map['SubSatus'];
        }

        return $model;
    }
}
