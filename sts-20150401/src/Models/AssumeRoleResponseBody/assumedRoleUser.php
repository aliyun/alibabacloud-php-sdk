<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleResponseBody;

use AlibabaCloud\Dara\Model;

class assumedRoleUser extends Model
{
    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $assumedRoleId;
    protected $_name = [
        'arn' => 'Arn',
        'assumedRoleId' => 'AssumedRoleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        if (null !== $this->assumedRoleId) {
            $res['AssumedRoleId'] = $this->assumedRoleId;
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
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        if (isset($map['AssumedRoleId'])) {
            $model->assumedRoleId = $map['AssumedRoleId'];
        }

        return $model;
    }
}
