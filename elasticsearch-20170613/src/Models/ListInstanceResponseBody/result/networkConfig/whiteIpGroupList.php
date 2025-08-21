<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result\networkConfig;

use AlibabaCloud\Dara\Model;

class whiteIpGroupList extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string[]
     */
    public $ips;

    /**
     * @var string
     */
    public $whiteIpType;
    protected $_name = [
        'groupName' => 'groupName',
        'ips' => 'ips',
        'whiteIpType' => 'whiteIpType',
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

        if (null !== $this->whiteIpType) {
            $res['whiteIpType'] = $this->whiteIpType;
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

        if (isset($map['whiteIpType'])) {
            $model->whiteIpType = $map['whiteIpType'];
        }

        return $model;
    }
}
