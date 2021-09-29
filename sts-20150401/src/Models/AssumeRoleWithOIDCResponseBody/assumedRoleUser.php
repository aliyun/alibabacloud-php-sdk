<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleWithOIDCResponseBody;

use AlibabaCloud\Tea\Model;

class assumedRoleUser extends Model
{
    /**
     * @var string
     */
    public $assumedRoleId;

    /**
     * @var string
     */
    public $arn;
    protected $_name = [
        'assumedRoleId' => 'AssumedRoleId',
        'arn'           => 'Arn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assumedRoleId) {
            $res['AssumedRoleId'] = $this->assumedRoleId;
        }
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assumedRoleUser
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssumedRoleId'])) {
            $model->assumedRoleId = $map['AssumedRoleId'];
        }
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        return $model;
    }
}
