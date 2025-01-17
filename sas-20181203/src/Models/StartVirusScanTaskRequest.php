<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class StartVirusScanTaskRequest extends Model
{
    /**
     * @var string
     */
    public $targetInfo;
    protected $_name = [
        'targetInfo' => 'TargetInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targetInfo) {
            $res['TargetInfo'] = $this->targetInfo;
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
        if (isset($map['TargetInfo'])) {
            $model->targetInfo = $map['TargetInfo'];
        }

        return $model;
    }
}
