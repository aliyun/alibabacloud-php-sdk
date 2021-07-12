<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DeletePresetRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $presetId;

    /**
     * @var string
     */
    public $subProtocol;
    protected $_name = [
        'ownerId'     => 'OwnerId',
        'id'          => 'Id',
        'presetId'    => 'PresetId',
        'subProtocol' => 'SubProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->presetId) {
            $res['PresetId'] = $this->presetId;
        }
        if (null !== $this->subProtocol) {
            $res['SubProtocol'] = $this->subProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePresetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PresetId'])) {
            $model->presetId = $map['PresetId'];
        }
        if (isset($map['SubProtocol'])) {
            $model->subProtocol = $map['SubProtocol'];
        }

        return $model;
    }
}
