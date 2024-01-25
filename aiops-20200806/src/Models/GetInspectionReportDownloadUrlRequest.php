<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class GetInspectionReportDownloadUrlRequest extends Model
{
    /**
     * @var string
     */
    public $downloadReportListJson;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'downloadReportListJson' => 'DownloadReportListJson',
        'operaUid'               => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadReportListJson) {
            $res['DownloadReportListJson'] = $this->downloadReportListJson;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInspectionReportDownloadUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadReportListJson'])) {
            $model->downloadReportListJson = $map['DownloadReportListJson'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}
