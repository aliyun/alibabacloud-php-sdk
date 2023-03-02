<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateDownloadDataJobResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $asyncExecute;

    /**
     * @example test_download_file
     *
     * @var string
     */
    public $csvFileName;

    /**
     * @example https://oss-xxxx-xxxx.xxxx......
     *
     * @var string
     */
    public $csvUrl;

    /**
     * @example 62d949808bc742187xxxxxx
     *
     * @var string
     */
    public $longJobId;

    /**
     * @example -1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'asyncExecute' => 'AsyncExecute',
        'csvFileName'  => 'CsvFileName',
        'csvUrl'       => 'CsvUrl',
        'longJobId'    => 'LongJobId',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncExecute) {
            $res['AsyncExecute'] = $this->asyncExecute;
        }
        if (null !== $this->csvFileName) {
            $res['CsvFileName'] = $this->csvFileName;
        }
        if (null !== $this->csvUrl) {
            $res['CsvUrl'] = $this->csvUrl;
        }
        if (null !== $this->longJobId) {
            $res['LongJobId'] = $this->longJobId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncExecute'])) {
            $model->asyncExecute = $map['AsyncExecute'];
        }
        if (isset($map['CsvFileName'])) {
            $model->csvFileName = $map['CsvFileName'];
        }
        if (isset($map['CsvUrl'])) {
            $model->csvUrl = $map['CsvUrl'];
        }
        if (isset($map['LongJobId'])) {
            $model->longJobId = $map['LongJobId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
