<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
