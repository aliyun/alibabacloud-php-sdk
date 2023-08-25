<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\SetSparkAppLogRootPathResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The recommended default OSS log path.
     *
     * @example oss://path/to/log
     *
     * @var string
     */
    public $defaultLogPath;

    /**
     * @description Indicates whether an OSS log path exists.
     *
     * @example true
     *
     * @var bool
     */
    public $isLogPathExists;

    /**
     * @description The time when the modification was last modified.
     *
     * @example 1675236908
     *
     * @var string
     */
    public $modifiedTimestamp;

    /**
     * @description The modifier ID.
     *
     * @example 1111111
     *
     * @var string
     */
    public $modifiedUid;

    /**
     * @description The OSS log path.
     *
     * @example oss://path/to/log
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
