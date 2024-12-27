<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Tea\Model;

class HarmonyPayload extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $displayType;

    /**
     * @var mixed[]
     */
    public $extra;

    /**
     * @var HarmonyBody
     */
    public $harmonyBody;
    protected $_name = [
        'displayType' => 'displayType',
        'extra'       => 'extra',
        'harmonyBody' => 'harmonyBody',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayType) {
            $res['displayType'] = $this->displayType;
        }
        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }
        if (null !== $this->harmonyBody) {
            $res['harmonyBody'] = null !== $this->harmonyBody ? $this->harmonyBody->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HarmonyPayload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['displayType'])) {
            $model->displayType = $map['displayType'];
        }
        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }
        if (isset($map['harmonyBody'])) {
            $model->harmonyBody = HarmonyBody::fromMap($map['harmonyBody']);
        }

        return $model;
    }
}
