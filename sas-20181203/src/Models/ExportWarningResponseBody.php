<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ExportWarningResponseBody extends Model
{
    /**
     * @description The name of the file that contains exported baseline check results.
     *
     * @example health_check_export_20220407
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The ID of the task to export baseline check results.
     *
     * > You can call use the value of this parameter to call the [DescribeHcExportInfo](~~DescribeHcExportInfo~~) operation to query the export progress.
     * @example 439316
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example A7FC828B-C242-1005-9736-C7CC5DC09FF0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fileName'  => 'FileName',
        'id'        => 'Id',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportWarningResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
