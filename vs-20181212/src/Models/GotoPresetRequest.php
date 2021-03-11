<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class GotoPresetRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $showLog;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $presetId;
    protected $_name = [
        'ownerId'  => 'OwnerId',
        'showLog'  => 'ShowLog',
        'id'       => 'Id',
        'presetId' => 'PresetId',
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
        if (null !== $this->showLog) {
            $res['ShowLog'] = $this->showLog;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->presetId) {
            $res['PresetId'] = $this->presetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GotoPresetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ShowLog'])) {
            $model->showLog = $map['ShowLog'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PresetId'])) {
            $model->presetId = $map['PresetId'];
        }

        return $model;
    }
}
