<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody;

use AlibabaCloud\Dara\Model;

class DBProxyAVZones extends Model
{
    /**
     * @var string[]
     */
    public $DBProxyAVZones;
    protected $_name = [
        'DBProxyAVZones' => 'DBProxyAVZones',
    ];

    public function validate()
    {
        if (\is_array($this->DBProxyAVZones)) {
            Model::validateArray($this->DBProxyAVZones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBProxyAVZones) {
            if (\is_array($this->DBProxyAVZones)) {
                $res['DBProxyAVZones'] = [];
                $n1 = 0;
                foreach ($this->DBProxyAVZones as $item1) {
                    $res['DBProxyAVZones'][$n1] = $item1;
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
        if (isset($map['DBProxyAVZones'])) {
            if (!empty($map['DBProxyAVZones'])) {
                $model->DBProxyAVZones = [];
                $n1 = 0;
                foreach ($map['DBProxyAVZones'] as $item1) {
                    $model->DBProxyAVZones[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
