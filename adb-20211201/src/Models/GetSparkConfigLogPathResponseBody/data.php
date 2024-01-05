<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkConfigLogPathResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The default log path.
     *
     * @example oss://aliyun-oa-adb-spark-1111-oss-cn-hanghzou/spark-logs
     *
     * @var string
     */
    public $defaultLogPath;

    /**
     * @description Indicates whether a log path exists.
     *
     * @example true
     *
     * @var bool
     */
    public $isLogPathExists;

    /**
     * @description The last modification time.
     *
     * @example 1675654361000
     *
     * @var string
     */
    public $modifiedTimestamp;

    /**
     * @description The account ID of the modifier.
     *
     * @example 10130223128xxx
     *
     * @var string
     */
    public $modifiedUid;

    /**
     * @description The recorded log path.
     *
     * @example oss://test/spark-logs/
     *
     * @var string
     */
    public $recordedLogPath;
    protected $_name = [
        'defaultLogPath'    => 'DefaultLogPath',
        'isLogPathExists'   => 'IsLogPathExists',
        'modifiedTimestamp' => 'ModifiedTimestamp',
        'modifiedUid'       => 'ModifiedUid',
        'recordedLogPath'   => 'RecordedLogPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultLogPath) {
            $res['DefaultLogPath'] = $this->defaultLogPath;
        }
        if (null !== $this->isLogPathExists) {
            $res['IsLogPathExists'] = $this->isLogPathExists;
        }
        if (null !== $this->modifiedTimestamp) {
            $res['ModifiedTimestamp'] = $this->modifiedTimestamp;
        }
        if (null !== $this->modifiedUid) {
            $res['ModifiedUid'] = $this->modifiedUid;
        }
        if (null !== $this->recordedLogPath) {
            $res['RecordedLogPath'] = $this->recordedLogPath;
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
        if (isset($map['DefaultLogPath'])) {
            $model->defaultLogPath = $map['DefaultLogPath'];
        }
        if (isset($map['IsLogPathExists'])) {
            $model->isLogPathExists = $map['IsLogPathExists'];
        }
        if (isset($map['ModifiedTimestamp'])) {
            $model->modifiedTimestamp = $map['ModifiedTimestamp'];
        }
        if (isset($map['ModifiedUid'])) {
            $model->modifiedUid = $map['ModifiedUid'];
        }
        if (isset($map['RecordedLogPath'])) {
            $model->recordedLogPath = $map['RecordedLogPath'];
        }

        return $model;
    }
}
