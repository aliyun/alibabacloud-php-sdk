<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models;

use AlibabaCloud\Dara\Model;

class DeleteApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $businessUnitId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'businessUnitId' => 'BusinessUnitId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->businessUnitId) {
            $res['BusinessUnitId'] = $this->businessUnitId;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['BusinessUnitId'])) {
            $model->businessUnitId = $map['BusinessUnitId'];
        }

        return $model;
    }
}
