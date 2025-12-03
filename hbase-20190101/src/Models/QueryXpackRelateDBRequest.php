<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Dara\Model;

class QueryXpackRelateDBRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $hasSingleNode;

    /**
     * @var string
     */
    public $relateDbType;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'hasSingleNode' => 'HasSingleNode',
        'relateDbType' => 'RelateDbType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->hasSingleNode) {
            $res['HasSingleNode'] = $this->hasSingleNode;
        }

        if (null !== $this->relateDbType) {
            $res['RelateDbType'] = $this->relateDbType;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['HasSingleNode'])) {
            $model->hasSingleNode = $map['HasSingleNode'];
        }

        if (isset($map['RelateDbType'])) {
            $model->relateDbType = $map['RelateDbType'];
        }

        return $model;
    }
}
