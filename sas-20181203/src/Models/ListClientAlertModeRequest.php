<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListClientAlertModeRequest extends Model
{
    /**
     * @description The protection mode. Valid values:
     *
     *   **strict**: The strict mode. False positives may be generated. We recommend that you enable this mode during major events.
     *   **balance**: The balanced mode. More risks can be detected with less false positives in this mode.
     *
     * @example strict
     *
     * @var string
     */
    public $mode;
    protected $_name = [
        'mode' => 'Mode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClientAlertModeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
