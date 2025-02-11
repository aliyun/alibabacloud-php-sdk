<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\SetSparkAppLogRootPathResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $defaultLogPath;
    /**
     * @var bool
     */
    public $isLogPathExists;
    /**
     * @var string
     */
    public $modifiedTimestamp;
    /**
     * @var string
     */
    public $modifiedUid;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
