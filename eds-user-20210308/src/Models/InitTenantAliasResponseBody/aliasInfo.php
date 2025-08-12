<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\InitTenantAliasResponseBody;

use AlibabaCloud\Dara\Model;

class aliasInfo extends Model
{
    /**
     * @var string
     */
    public $aliasEditDisabledReason;

    /**
     * @var bool
     */
    public $aliasEditable;

    /**
     * @var string
     */
    public $aliasSourceType;

    /**
     * @var string
     */
    public $nextModifyTime;
    protected $_name = [
        'aliasEditDisabledReason' => 'AliasEditDisabledReason',
        'aliasEditable' => 'AliasEditable',
        'aliasSourceType' => 'AliasSourceType',
        'nextModifyTime' => 'NextModifyTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliasEditDisabledReason) {
            $res['AliasEditDisabledReason'] = $this->aliasEditDisabledReason;
        }

        if (null !== $this->aliasEditable) {
            $res['AliasEditable'] = $this->aliasEditable;
        }

        if (null !== $this->aliasSourceType) {
            $res['AliasSourceType'] = $this->aliasSourceType;
        }

        if (null !== $this->nextModifyTime) {
            $res['NextModifyTime'] = $this->nextModifyTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasEditDisabledReason'])) {
            $model->aliasEditDisabledReason = $map['AliasEditDisabledReason'];
        }

        if (isset($map['AliasEditable'])) {
            $model->aliasEditable = $map['AliasEditable'];
        }

        if (isset($map['AliasSourceType'])) {
            $model->aliasSourceType = $map['AliasSourceType'];
        }

        if (isset($map['NextModifyTime'])) {
            $model->nextModifyTime = $map['NextModifyTime'];
        }

        return $model;
    }
}
