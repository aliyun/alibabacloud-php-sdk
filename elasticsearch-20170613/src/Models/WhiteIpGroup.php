<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class WhiteIpGroup extends Model
{
    /**
     * @var string
     */
    public $whiteIpType;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string[]
     */
    public $ips;
    protected $_name = [
        'whiteIpType' => 'WhiteIpType',
        'groupName' => 'groupName',
        'ips' => 'ips',
    ];

    public function validate()
    {
        if (\is_array($this->ips)) {
            Model::validateArray($this->ips);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->whiteIpType) {
            $res['WhiteIpType'] = $this->whiteIpType;
        }

        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }

        if (null !== $this->ips) {
            if (\is_array($this->ips)) {
                $res['ips'] = [];
                $n1 = 0;
                foreach ($this->ips as $item1) {
                    $res['ips'][$n1] = $item1;
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
        if (isset($map['WhiteIpType'])) {
            $model->whiteIpType = $map['WhiteIpType'];
        }

        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }

        if (isset($map['ips'])) {
            if (!empty($map['ips'])) {
                $model->ips = [];
                $n1 = 0;
                foreach ($map['ips'] as $item1) {
                    $model->ips[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
