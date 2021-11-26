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
     * @var string
     */
    public $audioURL;

    /**
     * @var dialogues
     */
    public $dialogues;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $incorrectWords;

    /**
     * @var int
     */
    public $index;

    /**
     * @var float
     */
    public $precision;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var bool
     */
    public $verified;

    /**
     * @var int
     */
    public $verifiedCount;
    protected $_name = [
        'audioScheme'    => 'AudioScheme',
        'audioURL'       => 'AudioURL',
        'dialogues'      => 'Dialogues',
        'duration'       => 'Duration',
        'fileId'         => 'FileId',
        'fileName'       => 'FileName',
        'incorrectWords' => 'IncorrectWords',
        'index'          => 'Index',
        'precision'      => 'Precision',
        'status'         => 'Status',
        'totalCount'     => 'TotalCount',
        'updateTime'     => 'UpdateTime',
        'verified'       => 'Verified',
        'verifiedCount'  => 'VerifiedCount',
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
        if (null !== $this->audioURL) {
            $res['AudioURL'] = $this->audioURL;
        }
        if (null !== $this->dialogues) {
            $res['Dialogues'] = null !== $this->dialogues ? $this->dialogues->toMap() : null;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->incorrectWords) {
            $res['IncorrectWords'] = $this->incorrectWords;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->precision) {
            $res['Precision'] = $this->precision;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->verified) {
            $res['Verified'] = $this->verified;
        }
        if (null !== $this->verifiedCount) {
            $res['VerifiedCount'] = $this->verifiedCount;
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
        if (isset($map['AudioURL'])) {
            $model->audioURL = $map['AudioURL'];
        }
        if (isset($map['Dialogues'])) {
            $model->dialogues = dialogues::fromMap($map['Dialogues']);
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['IncorrectWords'])) {
            $model->incorrectWords = $map['IncorrectWords'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Precision'])) {
            $model->precision = $map['Precision'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Verified'])) {
            $model->verified = $map['Verified'];
        }
        if (isset($map['VerifiedCount'])) {
            $model->verifiedCount = $map['VerifiedCount'];
        }

        return $model;
    }
}
