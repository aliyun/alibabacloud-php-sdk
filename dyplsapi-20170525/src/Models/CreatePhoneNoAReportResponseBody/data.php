<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePhoneNoAReportResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $createResult;

    /**
     * @var int
     */
    public $failType;
    protected $_name = [
        'createResult' => 'CreateResult',
        'failType' => 'FailType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createResult) {
            $res['CreateResult'] = $this->createResult;
        }

        if (null !== $this->failType) {
            $res['FailType'] = $this->failType;
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
        if (isset($map['CreateResult'])) {
            $model->createResult = $map['CreateResult'];
        }

        if (isset($map['FailType'])) {
            $model->failType = $map['FailType'];
        }

        return $model;
    }
}
