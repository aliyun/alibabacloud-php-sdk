<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class BatchJobSubmitRequest extends Model
{
    /**
     * @example {{"autoSubmit":false,"configName":"test_builder","folderConfig":{"folderId":"rd-EUx7Qp","prodConfig":[{"allLogs":false,"allRegions":false,"logConfig":[{"logCode":"cloud_siem_rds_audit_log","logStorePattern":"vpc-test","projectPattern":"vpc-test"}],"prodCode":"rds","regions":["cn-shanghai"]},{"allLogs":true,"allRegions":true,"prodCode":"sas"}],"type":"folder"},"listenRdChange":false,"logConfigs":{"cloud_siem_rds_audit_log":{"logCode":"cloud_siem_rds_audit_log","logStorePattern":"vpc-test","projectPattern":"vpc-test"}}}}
     *
     * @var string
     */
    public $jsonConfig;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'jsonConfig' => 'JsonConfig',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jsonConfig) {
            $res['JsonConfig'] = $this->jsonConfig;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchJobSubmitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JsonConfig'])) {
            $model->jsonConfig = $map['JsonConfig'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
