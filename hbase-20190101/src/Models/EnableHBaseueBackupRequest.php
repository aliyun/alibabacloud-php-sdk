<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class EnableHBaseueBackupRequest extends Model
{
    /**
     * @var string
     */
    public $hbaseueClusterId;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var int
     */
    public $coldStorageSize;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'hbaseueClusterId' => 'HbaseueClusterId',
        'nodeCount'        => 'NodeCount',
        'coldStorageSize'  => 'ColdStorageSize',
        'clientToken'      => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hbaseueClusterId) {
            $res['HbaseueClusterId'] = $this->hbaseueClusterId;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->coldStorageSize) {
            $res['ColdStorageSize'] = $this->coldStorageSize;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableHBaseueBackupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HbaseueClusterId'])) {
            $model->hbaseueClusterId = $map['HbaseueClusterId'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['ColdStorageSize'])) {
            $model->coldStorageSize = $map['ColdStorageSize'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
