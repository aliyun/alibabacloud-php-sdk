<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecursionZoneResponseBody\effectiveScopes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecursionZoneResponseBody\effectiveScopes\effectiveScope\scopes;

class effectiveScope extends Model
{
    /**
     * @var string
     */
    public $effectiveType;

    /**
     * @var scopes
     */
    public $scopes;
    protected $_name = [
        'effectiveType' => 'EffectiveType',
        'scopes' => 'Scopes',
    ];

    public function validate()
    {
        if (null !== $this->scopes) {
            $this->scopes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectiveType) {
            $res['EffectiveType'] = $this->effectiveType;
        }

        if (null !== $this->scopes) {
            $res['Scopes'] = null !== $this->scopes ? $this->scopes->toArray($noStream) : $this->scopes;
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
        if (isset($map['EffectiveType'])) {
            $model->effectiveType = $map['EffectiveType'];
        }

        if (isset($map['Scopes'])) {
            $model->scopes = scopes::fromMap($map['Scopes']);
        }

        return $model;
    }
}
