<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CheckQuaraFileIdRequest extends Model
{
    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string[]
     */
    public $quaraFileIds;
    protected $_name = [
        'uuid'         => 'Uuid',
        'quaraFileIds' => 'QuaraFileIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->quaraFileIds) {
            $res['QuaraFileIds'] = $this->quaraFileIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckQuaraFileIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['QuaraFileIds'])) {
            if (!empty($map['QuaraFileIds'])) {
                $model->quaraFileIds = $map['QuaraFileIds'];
            }
        }

        return $model;
    }
}
