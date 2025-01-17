<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CheckQuaraFileIdRequest extends Model
{
    /**
     * @var string[]
     */
    public $quaraFileIds;
    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'quaraFileIds' => 'QuaraFileIds',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->quaraFileIds)) {
            Model::validateArray($this->quaraFileIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quaraFileIds) {
            if (\is_array($this->quaraFileIds)) {
                $res['QuaraFileIds'] = [];
                $n1                  = 0;
                foreach ($this->quaraFileIds as $item1) {
                    $res['QuaraFileIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['QuaraFileIds'])) {
            if (!empty($map['QuaraFileIds'])) {
                $model->quaraFileIds = [];
                $n1                  = 0;
                foreach ($map['QuaraFileIds'] as $item1) {
                    $model->quaraFileIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
