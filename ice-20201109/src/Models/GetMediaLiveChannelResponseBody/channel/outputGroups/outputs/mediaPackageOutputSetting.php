<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel\outputGroups\outputs;

use AlibabaCloud\Dara\Model;

class mediaPackageOutputSetting extends Model
{
    /**
     * @var string
     */
    public $audioGroupId;

    /**
     * @var string
     */
    public $nameModifier;
    protected $_name = [
        'audioGroupId' => 'AudioGroupId',
        'nameModifier' => 'NameModifier',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioGroupId) {
            $res['AudioGroupId'] = $this->audioGroupId;
        }

        if (null !== $this->nameModifier) {
            $res['NameModifier'] = $this->nameModifier;
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
        if (isset($map['AudioGroupId'])) {
            $model->audioGroupId = $map['AudioGroupId'];
        }

        if (isset($map['NameModifier'])) {
            $model->nameModifier = $map['NameModifier'];
        }

        return $model;
    }
}
