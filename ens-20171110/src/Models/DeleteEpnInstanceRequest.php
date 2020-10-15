<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteEpnInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $EPNInstanceId;
    protected $_name = [
        'EPNInstanceId' => 'EPNInstanceId',
    ];

    public function validate()
    {
        Model::validateRequired('EPNInstanceId', $this->EPNInstanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->EPNInstanceId) {
            $res['EPNInstanceId'] = $this->EPNInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEpnInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EPNInstanceId'])) {
            $model->EPNInstanceId = $map['EPNInstanceId'];
        }

        return $model;
    }
}
