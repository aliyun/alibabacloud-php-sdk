<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSubscriptionInstanceRequest;

use AlibabaCloud\Tea\Model;

class subscriptionDataType extends Model
{
    /**
     * @description Specifies whether to track DDL statements. Default value: true. Valid values:
     *
     *   **true**: tracks DDL statements.
     *   **false**: does not track DDL statements.
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $DDL;

    /**
     * @description Specifies whether to track DML statements. Default value: true. Valid values:
     *
     *   **true**: tracks DML statements.
     *   **false**: does not tack DML statements.
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $DML;
    protected $_name = [
        'DDL' => 'DDL',
        'DML' => 'DML',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DDL) {
            $res['DDL'] = $this->DDL;
        }
        if (null !== $this->DML) {
            $res['DML'] = $this->DML;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscriptionDataType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DDL'])) {
            $model->DDL = $map['DDL'];
        }
        if (isset($map['DML'])) {
            $model->DML = $map['DML'];
        }

        return $model;
    }
}
