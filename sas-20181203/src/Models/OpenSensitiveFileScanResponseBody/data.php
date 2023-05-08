<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\OpenSensitiveFileScanResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example on
     *
     * @var string
     */
    public $switchOn;
    protected $_name = [
        'switchOn' => 'SwitchOn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->switchOn) {
            $res['SwitchOn'] = $this->switchOn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SwitchOn'])) {
            $model->switchOn = $map['SwitchOn'];
        }

        return $model;
    }
}
