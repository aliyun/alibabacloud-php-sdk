<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckStructureResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckStructureResponseBody\checkStructureResponse\standards;
use AlibabaCloud\Tea\Model;

class checkStructureResponse extends Model
{
    /**
     * @description The type of the check item.
     *
     *   RISK: security risk.
     *   IDENTITY_PERMISSION: Cloud Infrastructure Entitlement Management (CIEM).
     *   COMPLIANCE: security compliance.
     *
     * @example RISK
     *
     * @var string
     */
    public $standardType;

    /**
     * @description The structure information about the check items of the business type.
     *
     * @var standards[]
     */
    public $standards;
    protected $_name = [
        'standardType' => 'StandardType',
        'standards' => 'Standards',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->standardType) {
            $res['StandardType'] = $this->standardType;
        }
        if (null !== $this->standards) {
            $res['Standards'] = [];
            if (null !== $this->standards && \is_array($this->standards)) {
                $n = 0;
                foreach ($this->standards as $item) {
                    $res['Standards'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkStructureResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StandardType'])) {
            $model->standardType = $map['StandardType'];
        }
        if (isset($map['Standards'])) {
            if (!empty($map['Standards'])) {
                $model->standards = [];
                $n = 0;
                foreach ($map['Standards'] as $item) {
                    $model->standards[$n++] = null !== $item ? standards::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
