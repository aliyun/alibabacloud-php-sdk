<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskMetricInfoResponseBody;

use AlibabaCloud\Tea\Model;

class metricInfo extends Model
{
    /**
     * @var int
     */
    public $deleteReaderRecords;

    /**
     * @var int
     */
    public $deleteWriterRecords;

    /**
     * @var int
     */
    public $insertReaderRecords;

    /**
     * @var int
     */
    public $insertWriterRecords;

    /**
     * @var int
     */
    public $lastTaskDelay;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $sumReaderRecords;

    /**
     * @var int
     */
    public $sumWriterRecords;

    /**
     * @var int
     */
    public $updateReaderRecords;

    /**
     * @var int
     */
    public $updateWriterRecords;
    protected $_name = [
        'deleteReaderRecords' => 'DeleteReaderRecords',
        'deleteWriterRecords' => 'DeleteWriterRecords',
        'insertReaderRecords' => 'InsertReaderRecords',
        'insertWriterRecords' => 'InsertWriterRecords',
        'lastTaskDelay'       => 'LastTaskDelay',
        'message'             => 'Message',
        'sumReaderRecords'    => 'SumReaderRecords',
        'sumWriterRecords'    => 'SumWriterRecords',
        'updateReaderRecords' => 'UpdateReaderRecords',
        'updateWriterRecords' => 'UpdateWriterRecords',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteReaderRecords) {
            $res['DeleteReaderRecords'] = $this->deleteReaderRecords;
        }
        if (null !== $this->deleteWriterRecords) {
            $res['DeleteWriterRecords'] = $this->deleteWriterRecords;
        }
        if (null !== $this->insertReaderRecords) {
            $res['InsertReaderRecords'] = $this->insertReaderRecords;
        }
        if (null !== $this->insertWriterRecords) {
            $res['InsertWriterRecords'] = $this->insertWriterRecords;
        }
        if (null !== $this->lastTaskDelay) {
            $res['LastTaskDelay'] = $this->lastTaskDelay;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->sumReaderRecords) {
            $res['SumReaderRecords'] = $this->sumReaderRecords;
        }
        if (null !== $this->sumWriterRecords) {
            $res['SumWriterRecords'] = $this->sumWriterRecords;
        }
        if (null !== $this->updateReaderRecords) {
            $res['UpdateReaderRecords'] = $this->updateReaderRecords;
        }
        if (null !== $this->updateWriterRecords) {
            $res['UpdateWriterRecords'] = $this->updateWriterRecords;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteReaderRecords'])) {
            $model->deleteReaderRecords = $map['DeleteReaderRecords'];
        }
        if (isset($map['DeleteWriterRecords'])) {
            $model->deleteWriterRecords = $map['DeleteWriterRecords'];
        }
        if (isset($map['InsertReaderRecords'])) {
            $model->insertReaderRecords = $map['InsertReaderRecords'];
        }
        if (isset($map['InsertWriterRecords'])) {
            $model->insertWriterRecords = $map['InsertWriterRecords'];
        }
        if (isset($map['LastTaskDelay'])) {
            $model->lastTaskDelay = $map['LastTaskDelay'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['SumReaderRecords'])) {
            $model->sumReaderRecords = $map['SumReaderRecords'];
        }
        if (isset($map['SumWriterRecords'])) {
            $model->sumWriterRecords = $map['SumWriterRecords'];
        }
        if (isset($map['UpdateReaderRecords'])) {
            $model->updateReaderRecords = $map['UpdateReaderRecords'];
        }
        if (isset($map['UpdateWriterRecords'])) {
            $model->updateWriterRecords = $map['UpdateWriterRecords'];
        }

        return $model;
    }
}
