<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CheckQuaraFileIdRequest extends Model
{
    /**
     * @var string[]
     */
    public $quaraFileIds;

    /**
     * @example 4fe8e1cd-3c37-4851-b9de-124da32c****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'quaraFileIds' => 'QuaraFileIds',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quaraFileIds) {
            $res['QuaraFileIds'] = $this->quaraFileIds;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['QuaraFileIds'])) {
            if (!empty($map['QuaraFileIds'])) {
                $model->quaraFileIds = $map['QuaraFileIds'];
            }
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
