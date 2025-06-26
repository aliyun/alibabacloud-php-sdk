<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo\conflicts;
use AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo\domainInfo;

class ApiRouteConflictInfo extends Model
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
        'conflicts' => 'conflicts',
        'domainInfo' => 'domainInfo',
    ];

    public function validate()
    {
        if (\is_array($this->conflicts)) {
            Model::validateArray($this->conflicts);
        }
        if (null !== $this->domainInfo) {
            $this->domainInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conflicts) {
            if (\is_array($this->conflicts)) {
                $res['conflicts'] = [];
                $n1 = 0;
                foreach ($this->conflicts as $item1) {
                    $res['conflicts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->domainInfo) {
            $res['domainInfo'] = null !== $this->domainInfo ? $this->domainInfo->toArray($noStream) : $this->domainInfo;
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
        if (isset($map['conflicts'])) {
            if (!empty($map['conflicts'])) {
                $model->conflicts = [];
                $n1 = 0;
                foreach ($map['conflicts'] as $item1) {
                    $model->conflicts[$n1] = conflicts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['domainInfo'])) {
            $model->domainInfo = domainInfo::fromMap($map['domainInfo']);
        }

        return $model;
    }
}
