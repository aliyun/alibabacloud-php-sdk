<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListBaselineCheckWhiteRecordResponseBody\list_;

use AlibabaCloud\Dara\Model;

class containerItems extends Model
{
    /**
     * @var string
     */
    public $containerNames;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'containerNames' => 'ContainerNames',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerNames) {
            $res['ContainerNames'] = $this->containerNames;
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
        if (isset($map['ContainerNames'])) {
            $model->containerNames = $map['ContainerNames'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
