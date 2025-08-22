<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeKvRealTimeQpsDataResponseBody;

use AlibabaCloud\Dara\Model;

class aggregateData extends Model
{
    /**
     * @var int
     */
    public $acc;

    /**
     * @var string
     */
    public $accessType;

    /**
     * @var int
     */
    public $keyAcc;

    /**
     * @var int
     */
    public $keySuccAcc;
    protected $_name = [
        'acc' => 'Acc',
        'accessType' => 'AccessType',
        'keyAcc' => 'KeyAcc',
        'keySuccAcc' => 'KeySuccAcc',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acc) {
            $res['Acc'] = $this->acc;
        }

        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }

        if (null !== $this->keyAcc) {
            $res['KeyAcc'] = $this->keyAcc;
        }

        if (null !== $this->keySuccAcc) {
            $res['KeySuccAcc'] = $this->keySuccAcc;
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
        if (isset($map['Acc'])) {
            $model->acc = $map['Acc'];
        }

        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }

        if (isset($map['KeyAcc'])) {
            $model->keyAcc = $map['KeyAcc'];
        }

        if (isset($map['KeySuccAcc'])) {
            $model->keySuccAcc = $map['KeySuccAcc'];
        }

        return $model;
    }
}
