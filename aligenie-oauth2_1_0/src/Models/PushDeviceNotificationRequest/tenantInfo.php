<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models\PushDeviceNotificationRequest;

use AlibabaCloud\Dara\Model;

class tenantInfo extends Model
{
    /**
     * @var string
     */
    public $subjectId;
    protected $_name = [
        'subjectId' => 'SubjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subjectId) {
            $res['SubjectId'] = $this->subjectId;
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
        if (isset($map['SubjectId'])) {
            $model->subjectId = $map['SubjectId'];
        }

        return $model;
    }
}
