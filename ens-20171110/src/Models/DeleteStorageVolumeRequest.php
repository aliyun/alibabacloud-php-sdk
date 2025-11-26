<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DeleteStorageVolumeRequest extends Model
{
    /**
     * @var string
     */
    public $volumeId;
    protected $_name = [
        'volumeId' => 'VolumeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->volumeId) {
            $res['VolumeId'] = $this->volumeId;
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
        if (isset($map['VolumeId'])) {
            $model->volumeId = $map['VolumeId'];
        }

        return $model;
    }
}
