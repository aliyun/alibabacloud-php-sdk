<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeKvUsageDataResponseBody;

use AlibabaCloud\Tea\Model;

class kvUsageData extends Model
{
    /**
     * @example 1340000
     *
     * @var int
     */
    public $acc;

    /**
     * @example get
     *
     * @var string
     */
    public $accessType;

    /**
     * @example 534167033424646144
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @example 2022-11-14T15:00:03Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'acc'         => 'Acc',
        'accessType'  => 'AccessType',
        'namespaceId' => 'NamespaceId',
        'timeStamp'   => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acc) {
            $res['Acc'] = $this->acc;
        }
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return kvUsageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acc'])) {
            $model->acc = $map['Acc'];
        }
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
