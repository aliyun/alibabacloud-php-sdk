<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ExportRecordRequest extends Model
{
    /**
     * @description The type of the check result list to export. Valid values:
     *
     *   **assetInstance**: the list of servers displayed on the Host page
     *   **user**: the list of fingerprints for accounts
     *   **port**: the list of fingerprints for ports
     *   **process**: the list of fingerprints for processes
     *   **sca**: the list of fingerprints for middleware assets
     *   **database**: the list of fingerprints for databases
     *   **web**: the list of fingerprints for web services
     *   **software**: the list of fingerprints for software assets
     *   **cron**: the list of fingerprints for scheduled tasks
     *   **autorun**: the list of fingerprints for startup items
     *   **lkm**: the list of fingerprints for kernel modules
     *   **webserver**: the list of fingerprints for websites
     *   **imageVulExport**: the list of image system vulnerabilities
     *   **imageBaseLineExport**: the list of check results for image baselines
     *   **imageAffectedMaliciousExport**: the list of check results for malicious image samples
     *   **baseline**: the list of check results for configuration assessment
     *   **attack**: the list of alert events for attack analysis
     *   **accessKey**: the list of alert events that are generated for AccessKey pair leaks
     *
     * @example database
     *
     * @var string
     */
    public $exportType;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The conditions that are used to filter check results.
     *
     * > This operation is a common export operation for multiple features of Security Center. The available configuration fields of this parameter vary based on the features. We recommend that you do not specify this parameter when you call the operation. You can export an information list without specifying this parameter, and then filter data in the exported Excel file.
     * @example {"extend":"1","currentPage":1,"pageSize":10}
     *
     * @var string
     */
    public $params;
    protected $_name = [
        'exportType' => 'ExportType',
        'lang'       => 'Lang',
        'params'     => 'Params',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        return $model;
    }
}
