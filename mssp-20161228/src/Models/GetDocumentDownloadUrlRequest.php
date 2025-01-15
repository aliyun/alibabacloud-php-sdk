<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Tea\Model;

class GetDocumentDownloadUrlRequest extends Model
{
    /**
     * @description Document management ID.
     *
     * This parameter is required.
     * @example 175815
     *
     * @var int
     */
    public $id;

    /**
     * @description Report type.
     *
     * @example 5
     *
     * @var string
     */
    public $reportType;
    protected $_name = [
        'id'         => 'Id',
        'reportType' => 'ReportType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->reportType) {
            $res['ReportType'] = $this->reportType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDocumentDownloadUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ReportType'])) {
            $model->reportType = $map['ReportType'];
        }

        return $model;
    }
}
