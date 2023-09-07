<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBClusterTDEResponseBody extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example pc-***************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Indicates whether automatic encryption is enabled for new tables. Valid values:
     *
     *   **ON**
     *   **OFF**
     *
     * @example ON
     *
     * @var string
     */
    public $encryptNewTables;

    /**
     * @description The ID of the custom key.
     *
     * @example 2a4f4ac2-****-****-****-************
     *
     * @var string
     */
    public $encryptionKey;

    /**
     * @description The ID of the request.
     *
     * @example E37D1508-EC3B-4E06-A24A-C7AC31******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The region where the TDE key resides.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $TDERegion;

    /**
     * @description Indicates whether TDE encryption is enabled. Valid values:
     *
     *   **Enabled**
     *   **Disabled**
     *
     * @example Enabled
     *
     * @var string
     */
    public $TDEStatus;
    protected $_name = [
        'DBClusterId'      => 'DBClusterId',
        'encryptNewTables' => 'EncryptNewTables',
        'encryptionKey'    => 'EncryptionKey',
        'requestId'        => 'RequestId',
        'TDERegion'        => 'TDERegion',
        'TDEStatus'        => 'TDEStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->encryptNewTables) {
            $res['EncryptNewTables'] = $this->encryptNewTables;
        }
        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->TDERegion) {
            $res['TDERegion'] = $this->TDERegion;
        }
        if (null !== $this->TDEStatus) {
            $res['TDEStatus'] = $this->TDEStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterTDEResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EncryptNewTables'])) {
            $model->encryptNewTables = $map['EncryptNewTables'];
        }
        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TDERegion'])) {
            $model->TDERegion = $map['TDERegion'];
        }
        if (isset($map['TDEStatus'])) {
            $model->TDEStatus = $map['TDEStatus'];
        }

        return $model;
    }
}
