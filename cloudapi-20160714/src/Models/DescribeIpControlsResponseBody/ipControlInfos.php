<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeIpControlsResponseBody\ipControlInfos\ipControlInfo;

class ipControlInfos extends Model
{
    /**
     * @var ipControlInfo[]
     */
    public $ipControlInfo;
    protected $_name = [
        'ipControlInfo' => 'IpControlInfo',
    ];

    public function validate()
    {
        if (\is_array($this->ipControlInfo)) {
            Model::validateArray($this->ipControlInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipControlInfo) {
            if (\is_array($this->ipControlInfo)) {
                $res['IpControlInfo'] = [];
                $n1                   = 0;
                foreach ($this->ipControlInfo as $item1) {
                    $res['IpControlInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IpControlInfo'])) {
            if (!empty($map['IpControlInfo'])) {
                $model->ipControlInfo = [];
                $n1                   = 0;
                foreach ($map['IpControlInfo'] as $item1) {
                    $model->ipControlInfo[$n1++] = ipControlInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
