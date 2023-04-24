<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail\keyInfo\config;
use AlibabaCloud\Tea\Model;

class keyInfo extends Model
{
    /**
     * @example 2023-04-13 13:44:59
     *
     * @var string
     */
    public $auditDate;

    /**
     * @var config
     */
    public $config;

    /**
     * @example 2583****
     *
     * @var int
     */
    public $dbId;

    /**
     * @example https://oss.xxx.com
     *
     * @var string
     */
    public $downloadURL;
    protected $_name = [
        'auditDate'   => 'AuditDate',
        'config'      => 'Config',
        'dbId'        => 'DbId',
        'downloadURL' => 'DownloadURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditDate) {
            $res['AuditDate'] = $this->auditDate;
        }
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->downloadURL) {
            $res['DownloadURL'] = $this->downloadURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditDate'])) {
            $model->auditDate = $map['AuditDate'];
        }
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['DownloadURL'])) {
            $model->downloadURL = $map['DownloadURL'];
        }

        return $model;
    }
}
