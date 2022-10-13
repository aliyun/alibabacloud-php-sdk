<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class GetAsrConfigRequest extends Model
{
    /**
     * @var int
     */
    public $configLevel;

    /**
     * @var string
     */
    public $entryId;
    protected $_name = [
        'configLevel' => 'ConfigLevel',
        'entryId'     => 'EntryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configLevel) {
            $res['ConfigLevel'] = $this->configLevel;
        }
        if (null !== $this->entryId) {
            $res['EntryId'] = $this->entryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAsrConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigLevel'])) {
            $model->configLevel = $map['ConfigLevel'];
        }
        if (isset($map['EntryId'])) {
            $model->entryId = $map['EntryId'];
        }

        return $model;
    }
}
