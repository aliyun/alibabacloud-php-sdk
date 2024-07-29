<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\RouteRulesConflictInfo\conflicts;
use AlibabaCloud\SDK\APIG\V20240327\Models\RouteRulesConflictInfo\domainInfo;
use AlibabaCloud\Tea\Model;

class RouteRulesConflictInfo extends Model
{
    /**
     * @var conflicts[]
     */
    public $conflicts;

    /**
     * @var domainInfo
     */
    public $domainInfo;
    protected $_name = [
        'conflicts'  => 'conflicts',
        'domainInfo' => 'domainInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conflicts) {
            $res['conflicts'] = [];
            if (null !== $this->conflicts && \is_array($this->conflicts)) {
                $n = 0;
                foreach ($this->conflicts as $item) {
                    $res['conflicts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->domainInfo) {
            $res['domainInfo'] = null !== $this->domainInfo ? $this->domainInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RouteRulesConflictInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['conflicts'])) {
            if (!empty($map['conflicts'])) {
                $model->conflicts = [];
                $n                = 0;
                foreach ($map['conflicts'] as $item) {
                    $model->conflicts[$n++] = null !== $item ? conflicts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['domainInfo'])) {
            $model->domainInfo = domainInfo::fromMap($map['domainInfo']);
        }

        return $model;
    }
}
