<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class EnableHBaseueBackupRequest extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 800
     *
     * @var int
     */
    public $coldStorageSize;

    /**
     * @example ld-m5eznlga4k5bcxxxx
     *
     * @var string
     */
    public $hbaseueClusterId;

    /**
     * @example 2
     *
     * @var int
     */
    public $nodeCount;
    protected $_name = [
        'clientToken'      => 'ClientToken',
        'coldStorageSize'  => 'ColdStorageSize',
        'hbaseueClusterId' => 'HbaseueClusterId',
        'nodeCount'        => 'NodeCount',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return EnableHBaseueBackupRequest
     */
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
