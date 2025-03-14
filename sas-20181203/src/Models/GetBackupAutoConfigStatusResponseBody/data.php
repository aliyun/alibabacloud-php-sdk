<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetBackupAutoConfigStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the anti-ransomware policy for servers can be automatically configured by the managed anti-ransomware feature. Valid values:
     *
     *   **false**
     *   **true**
     *
     * @example false
     *
     * @var bool
     */
    public $canConfigAuto;
    protected $_name = [
        'canConfigAuto' => 'CanConfigAuto',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->canConfigAuto) {
            $res['CanConfigAuto'] = $this->canConfigAuto;
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
        if (isset($map['CanConfigAuto'])) {
            $model->canConfigAuto = $map['CanConfigAuto'];
        }

        return $model;
    }
}
