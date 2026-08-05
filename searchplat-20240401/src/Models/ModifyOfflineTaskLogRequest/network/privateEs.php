<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models\ModifyOfflineTaskLogRequest\network;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\ModifyOfflineTaskLogRequest\network\privateEs\whiteIpGroup;

class privateEs extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var whiteIpGroup[]
     */
    public $whiteIpGroup;
    protected $_name = [
        'enabled' => 'enabled',
        'whiteIpGroup' => 'whiteIpGroup',
    ];

    public function validate()
    {
        if (\is_array($this->whiteIpGroup)) {
            Model::validateArray($this->whiteIpGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->whiteIpGroup) {
            if (\is_array($this->whiteIpGroup)) {
                $res['whiteIpGroup'] = [];
                $n1 = 0;
                foreach ($this->whiteIpGroup as $item1) {
                    $res['whiteIpGroup'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['whiteIpGroup'])) {
            if (!empty($map['whiteIpGroup'])) {
                $model->whiteIpGroup = [];
                $n1 = 0;
                foreach ($map['whiteIpGroup'] as $item1) {
                    $model->whiteIpGroup[$n1] = whiteIpGroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
