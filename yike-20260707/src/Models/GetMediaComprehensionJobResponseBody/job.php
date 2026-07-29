<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models\GetMediaComprehensionJobResponseBody;

use AlibabaCloud\Dara\Model;

class job extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string[]
     */
    public $mediaIds;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'mediaIds' => 'MediaIds',
        'result' => 'Result',
        'status' => 'Status',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (\is_array($this->mediaIds)) {
            Model::validateArray($this->mediaIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->mediaIds) {
            if (\is_array($this->mediaIds)) {
                $res['MediaIds'] = [];
                $n1 = 0;
                foreach ($this->mediaIds as $item1) {
                    $res['MediaIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['MediaIds'])) {
            if (!empty($map['MediaIds'])) {
                $model->mediaIds = [];
                $n1 = 0;
                foreach ($map['MediaIds'] as $item1) {
                    $model->mediaIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
