<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\Tea\Model;

class ModifyAccessAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $ledgerId;

    /**
     * @var bool
     */
    public $enableOpenAccess;
    protected $_name = [
        'ledgerId'         => 'LedgerId',
        'enableOpenAccess' => 'EnableOpenAccess',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ledgerId) {
            $res['LedgerId'] = $this->ledgerId;
        }
        if (null !== $this->enableOpenAccess) {
            $res['EnableOpenAccess'] = $this->enableOpenAccess;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAccessAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LedgerId'])) {
            $model->ledgerId = $map['LedgerId'];
        }
        if (isset($map['EnableOpenAccess'])) {
            $model->enableOpenAccess = $map['EnableOpenAccess'];
        }

        return $model;
    }
}
