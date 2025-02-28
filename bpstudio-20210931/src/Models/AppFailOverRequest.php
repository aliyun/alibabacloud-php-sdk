<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Dara\Model;

class AppFailOverRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;
    /**
     * @var string
     */
    public $failZone;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'failZone'      => 'FailZone',
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

        if (null !== $this->failZone) {
            $res['FailZone'] = $this->failZone;
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

        if (isset($map['FailZone'])) {
            $model->failZone = $map['FailZone'];
        }

        return $model;
    }
}
