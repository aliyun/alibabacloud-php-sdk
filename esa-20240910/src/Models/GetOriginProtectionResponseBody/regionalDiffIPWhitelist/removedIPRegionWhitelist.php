<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\regionalDiffIPWhitelist;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\regionalDiffIPWhitelist\removedIPRegionWhitelist\regionalIPv4;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetOriginProtectionResponseBody\regionalDiffIPWhitelist\removedIPRegionWhitelist\regionalIPv6;

class removedIPRegionWhitelist extends Model
{
    /**
     * @var regionalIPv4[]
     */
    public $regionalIPv4;

    /**
     * @var regionalIPv6[]
     */
    public $regionalIPv6;
    protected $_name = [
        'regionalIPv4' => 'RegionalIPv4',
        'regionalIPv6' => 'RegionalIPv6',
    ];

    public function validate()
    {
        if (\is_array($this->regionalIPv4)) {
            Model::validateArray($this->regionalIPv4);
        }
        if (\is_array($this->regionalIPv6)) {
            Model::validateArray($this->regionalIPv6);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionalIPv4) {
            if (\is_array($this->regionalIPv4)) {
                $res['RegionalIPv4'] = [];
                $n1 = 0;
                foreach ($this->regionalIPv4 as $item1) {
                    $res['RegionalIPv4'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionalIPv6) {
            if (\is_array($this->regionalIPv6)) {
                $res['RegionalIPv6'] = [];
                $n1 = 0;
                foreach ($this->regionalIPv6 as $item1) {
                    $res['RegionalIPv6'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RegionalIPv4'])) {
            if (!empty($map['RegionalIPv4'])) {
                $model->regionalIPv4 = [];
                $n1 = 0;
                foreach ($map['RegionalIPv4'] as $item1) {
                    $model->regionalIPv4[$n1] = regionalIPv4::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionalIPv6'])) {
            if (!empty($map['RegionalIPv6'])) {
                $model->regionalIPv6 = [];
                $n1 = 0;
                foreach ($map['RegionalIPv6'] as $item1) {
                    $model->regionalIPv6[$n1] = regionalIPv6::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
