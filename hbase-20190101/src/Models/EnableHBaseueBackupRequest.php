<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Dara\Model;

class EnableHBaseueBackupRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $coldStorageSize;

    /**
     * @var string
     */
    public $hbaseueClusterId;

    /**
     * @var int
     */
    public $nodeCount;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'coldStorageSize' => 'ColdStorageSize',
        'hbaseueClusterId' => 'HbaseueClusterId',
        'nodeCount' => 'NodeCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->coldStorageSize) {
            $res['ColdStorageSize'] = $this->coldStorageSize;
        }

        if (null !== $this->hbaseueClusterId) {
            $res['HbaseueClusterId'] = $this->hbaseueClusterId;
        }

        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ColdStorageSize'])) {
            $model->coldStorageSize = $map['ColdStorageSize'];
        }

        if (isset($map['HbaseueClusterId'])) {
            $model->hbaseueClusterId = $map['HbaseueClusterId'];
        }

        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }

        return $model;
    }
}
