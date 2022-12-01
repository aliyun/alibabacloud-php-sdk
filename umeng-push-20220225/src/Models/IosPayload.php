<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Tea\Model;

class IosPayload extends Model
{
    /**
     * @var Aps
     */
    public $aps;

    /**
     * @var mixed[]
     */
    public $extra;
    protected $_name = [
        'aps'   => 'aps',
        'extra' => 'extra',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aps) {
            $res['aps'] = null !== $this->aps ? $this->aps->toMap() : null;
        }
        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IosPayload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aps'])) {
            $model->aps = Aps::fromMap($map['aps']);
        }
        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }

        return $model;
    }
}
