<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeKvRealTimeQpsDataResponseBody;

use AlibabaCloud\Dara\Model;

class kvQpsData extends Model
{
    /**
     * @var string
     */
    public $accessType;

    /**
     * @var int
     */
    public $keyQps;

    /**
     * @var int
     */
    public $keySuccQps;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var int
     */
    public $qps;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'accessType' => 'AccessType',
        'keyQps' => 'KeyQps',
        'keySuccQps' => 'KeySuccQps',
        'namespaceId' => 'NamespaceId',
        'qps' => 'Qps',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }

        if (null !== $this->keyQps) {
            $res['KeyQps'] = $this->keyQps;
        }

        if (null !== $this->keySuccQps) {
            $res['KeySuccQps'] = $this->keySuccQps;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
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
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }

        if (isset($map['KeyQps'])) {
            $model->keyQps = $map['KeyQps'];
        }

        if (isset($map['KeySuccQps'])) {
            $model->keySuccQps = $map['KeySuccQps'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
