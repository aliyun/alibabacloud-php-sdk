<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetNextResultToVerifyResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetNextResultToVerifyResponseBody\data\dialogues;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $audioScheme;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $audioURL;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $incorrectWords;

    /**
     * @var int
     */
    public $verifiedCount;

    /**
     * @var bool
     */
    public $verified;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var float
     */
    public $precision;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var dialogues
     */
    public $dialogues;

    /**
     * @var int
     */
    public $duration;
    protected $_name = [
        'audioScheme'    => 'AudioScheme',
        'status'         => 'Status',
        'index'          => 'Index',
        'audioURL'       => 'AudioURL',
        'updateTime'     => 'UpdateTime',
        'incorrectWords' => 'IncorrectWords',
        'verifiedCount'  => 'VerifiedCount',
        'verified'       => 'Verified',
        'fileName'       => 'FileName',
        'totalCount'     => 'TotalCount',
        'precision'      => 'Precision',
        'fileId'         => 'FileId',
        'dialogues'      => 'Dialogues',
        'duration'       => 'Duration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioScheme) {
            $res['AudioScheme'] = $this->audioScheme;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->audioURL) {
            $res['AudioURL'] = $this->audioURL;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->incorrectWords) {
            $res['IncorrectWords'] = $this->incorrectWords;
        }
        if (null !== $this->verifiedCount) {
            $res['VerifiedCount'] = $this->verifiedCount;
        }
        if (null !== $this->verified) {
            $res['Verified'] = $this->verified;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->precision) {
            $res['Precision'] = $this->precision;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->dialogues) {
            $res['Dialogues'] = null !== $this->dialogues ? $this->dialogues->toMap() : null;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
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
        if (isset($map['AudioScheme'])) {
            $model->audioScheme = $map['AudioScheme'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['AudioURL'])) {
            $model->audioURL = $map['AudioURL'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['IncorrectWords'])) {
            $model->incorrectWords = $map['IncorrectWords'];
        }
        if (isset($map['VerifiedCount'])) {
            $model->verifiedCount = $map['VerifiedCount'];
        }
        if (isset($map['Verified'])) {
            $model->verified = $map['Verified'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Precision'])) {
            $model->precision = $map['Precision'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['Dialogues'])) {
            $model->dialogues = dialogues::fromMap($map['Dialogues']);
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        return $model;
    }
}
