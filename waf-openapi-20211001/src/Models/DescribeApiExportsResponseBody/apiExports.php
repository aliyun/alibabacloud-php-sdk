<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApiExportsResponseBody;

use AlibabaCloud\Tea\Model;

class apiExports extends Model
{
    /**
     * @description The time when the data export task was created. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * @example 1725604852
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The name of the file.
     *
     * @example file_16109541456445334c0f01d9a7444e0e908***.csv
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The download URL of the exported file.
     *
     * @example https://waf-api-sec-cn.***.aliyuncs.com/file_1610954145***.csv
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description The format of the exported file.
     *
     * @example CSV
     *
     * @var string
     */
    public $format;

    /**
     * @description The status of the data export task. Valid values:
     *
     * **expired**: The file is expired.
     *
     * **exporting**: Data is being exported.
     *
     * **completed**: Data is exported.
     *
     * @example completed
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the data export task. Valid values:
     *
     * **apisec_api**: API tasks
     *
     * **apisec_abnormal**: API risk tasks
     *
     * **apisec_event**: API security event tasks
     *
     * @example apisec_api
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'createTime' => 'CreateTime',
        'fileName' => 'FileName',
        'fileUrl' => 'FileUrl',
        'format' => 'Format',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiExports
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
