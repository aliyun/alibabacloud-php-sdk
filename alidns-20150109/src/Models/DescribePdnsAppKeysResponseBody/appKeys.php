<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsAppKeysResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsAppKeysResponseBody\appKeys\bindEdgeDnsClusters;

class appKeys extends Model
{
    /**
     * @var string
     */
    public $appKeyId;

    /**
     * @var bindEdgeDnsClusters[]
     */
    public $bindEdgeDnsClusters;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'appKeyId' => 'AppKeyId',
        'bindEdgeDnsClusters' => 'BindEdgeDnsClusters',
        'createDate' => 'CreateDate',
        'createTimestamp' => 'CreateTimestamp',
        'remark' => 'Remark',
        'state' => 'State',
    ];

    public function validate()
    {
        if (\is_array($this->bindEdgeDnsClusters)) {
            Model::validateArray($this->bindEdgeDnsClusters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKeyId) {
            $res['AppKeyId'] = $this->appKeyId;
        }

        if (null !== $this->bindEdgeDnsClusters) {
            if (\is_array($this->bindEdgeDnsClusters)) {
                $res['BindEdgeDnsClusters'] = [];
                $n1 = 0;
                foreach ($this->bindEdgeDnsClusters as $item1) {
                    $res['BindEdgeDnsClusters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['AppKeyId'])) {
            $model->appKeyId = $map['AppKeyId'];
        }

        if (isset($map['BindEdgeDnsClusters'])) {
            if (!empty($map['BindEdgeDnsClusters'])) {
                $model->bindEdgeDnsClusters = [];
                $n1 = 0;
                foreach ($map['BindEdgeDnsClusters'] as $item1) {
                    $model->bindEdgeDnsClusters[$n1] = bindEdgeDnsClusters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
