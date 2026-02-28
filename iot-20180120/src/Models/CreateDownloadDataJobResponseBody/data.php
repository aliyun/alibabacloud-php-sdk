<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateDownloadDataJobResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $asyncExecute;

    /**
     * @var string
     */
    public $csvFileName;

    /**
     * @var string
     */
    public $csvUrl;

    /**
     * @var string
     */
    public $longJobId;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'asyncExecute' => 'AsyncExecute',
        'csvFileName' => 'CsvFileName',
        'csvUrl' => 'CsvUrl',
        'longJobId' => 'LongJobId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
