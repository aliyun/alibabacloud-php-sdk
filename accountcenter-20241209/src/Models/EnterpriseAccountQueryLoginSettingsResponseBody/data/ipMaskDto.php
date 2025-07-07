<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseAccountQueryLoginSettingsResponseBody\data;

use AlibabaCloud\Dara\Model;

class ipMaskDto extends Model
{
    /**
     * @var string
     */
    public $ipMaskEnabledStatus;

    /**
     * @var string[]
     */
    public $ipMasks;
    protected $_name = [
        'ipMaskEnabledStatus' => 'IpMaskEnabledStatus',
        'ipMasks' => 'IpMasks',
    ];

    public function validate()
    {
        if (\is_array($this->ipMasks)) {
            Model::validateArray($this->ipMasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipMaskEnabledStatus) {
            $res['IpMaskEnabledStatus'] = $this->ipMaskEnabledStatus;
        }

        if (null !== $this->ipMasks) {
            if (\is_array($this->ipMasks)) {
                $res['IpMasks'] = [];
                $n1 = 0;
                foreach ($this->ipMasks as $item1) {
                    $res['IpMasks'][$n1] = $item1;
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
        if (isset($map['IpMaskEnabledStatus'])) {
            $model->ipMaskEnabledStatus = $map['IpMaskEnabledStatus'];
        }

        if (isset($map['IpMasks'])) {
            if (!empty($map['IpMasks'])) {
                $model->ipMasks = [];
                $n1 = 0;
                foreach ($map['IpMasks'] as $item1) {
                    $model->ipMasks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
