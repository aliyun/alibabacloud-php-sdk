<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail\keyInfo\config;

class keyInfo extends Model
{
    /**
     * @var string
     */
    public $auditDate;
    /**
     * @var config
     */
    public $config;
    /**
     * @var int
     */
    public $dbId;
    /**
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
        if (null !== $this->config) {
            $this->config->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditDate) {
            $res['AuditDate'] = $this->auditDate;
        }

        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->downloadURL) {
            $res['DownloadURL'] = $this->downloadURL;
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
