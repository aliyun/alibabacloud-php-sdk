<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateClientAlertModeRequest extends Model
{
    /**
     * @description The protection mode. Valid values:
     *
     *   **strict**: The strict mode. False positives may be generated. We recommend that you enable this mode during major events.
     *   **balance**: The balanced mode. More risks can be detected with less false positives in this mode.
     *
     * @example balance
     *
     * @var string
     */
    public $mode;

    /**
     * @description The UUIDs of servers.
     *
     * @var string[]
     */
    public $uuids;
    protected $_name = [
        'mode'  => 'Mode',
        'uuids' => 'Uuids',
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
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateClientAlertModeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Uuids'])) {
            if (!empty($map['Uuids'])) {
                $model->uuids = $map['Uuids'];
            }
        }

        return $model;
    }
}
