<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetNextResultToVerifyResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetNextResultToVerifyResponseBody\data\dialogues;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http
     *
     * @var string
     */
    public $audioScheme;

    /**
     * @example sca-bucket.oss-cn-hangzhou.aliyuncs.com/upload_1173636551461420/dateset_1584674455133_SzC/%E4%BA%BA%E5%B7%A5%E6%A0%A1%E9%AA%8C%E6%B5%8B%E8%AF%95-%E6%9F%A5%E5%8C%97%E4%BA%AC%E5%A4%A9%E6%B0%94.wav?Expires=1584847372&amp;OSSAccessKeyId=*****&amp;Signature=HccAKnLOJwoYvzE*********
     *
     * @var string
     */
    public $audioURL;

    /**
     * @var dialogues
     */
    public $dialogues;

    /**
     * @example 23421
     *
     * @var int
     */
    public $duration;

    /**
     * @example e790e6c919d84b82b64ee*****
     *
     * @var string
     */
    public $fileId;

    /**
     * @example xxx.wav
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 23
     *
     * @var int
     */
    public $incorrectWords;

    /**
     * @example 2
     *
     * @var int
     */
    public $index;

    /**
     * @example 0.97079998
     *
     * @var float
     */
    public $precision;

    /**
     * @example 3
     *
     * @var int
     */
    public $status;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalCount;

    /**
     * @example 2020-03-20T11:26Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $verified;

    /**
     * @example 2
     *
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
