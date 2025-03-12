<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OpenSensitiveFileScanRequest extends Model
{
    /**
     * @description Specifies whether to enable or disable sensitive file scan. Valid values:
     *
     *   **on**: enables sensitive file scan
     *   **off**: disables sensitive file scan
     *
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
     * @return OpenSensitiveFileScanRequest
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
