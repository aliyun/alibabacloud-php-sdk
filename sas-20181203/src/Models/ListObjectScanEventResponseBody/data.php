<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListObjectScanEventResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListObjectScanEventResponseBody\data\details;

class data extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var details[]
     */
    public $details;

    /**
     * @var string
     */
    public $displaySandboxResult;

    /**
     * @var int
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var int
     */
    public $firstTime;

    /**
     * @var bool
     */
    public $hasSubEvent;

    /**
     * @var int
     */
    public $lastTime;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $sha1;

    /**
     * @var string
     */
    public $sha256;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'bucketName' => 'BucketName',
        'details' => 'Details',
        'displaySandboxResult' => 'DisplaySandboxResult',
        'eventId' => 'EventId',
        'eventName' => 'EventName',
        'filePath' => 'FilePath',
        'firstTime' => 'FirstTime',
        'hasSubEvent' => 'HasSubEvent',
        'lastTime' => 'LastTime',
        'md5' => 'Md5',
        'ossKey' => 'OssKey',
        'riskLevel' => 'RiskLevel',
        'sha1' => 'Sha1',
        'sha256' => 'Sha256',
        'source' => 'Source',
    ];

    public function validate()
    {
        if (\is_array($this->details)) {
            Model::validateArray($this->details);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->details) {
            if (\is_array($this->details)) {
                $res['Details'] = [];
                $n1 = 0;
                foreach ($this->details as $item1) {
                    $res['Details'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->displaySandboxResult) {
            $res['DisplaySandboxResult'] = $this->displaySandboxResult;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }

        if (null !== $this->hasSubEvent) {
            $res['HasSubEvent'] = $this->hasSubEvent;
        }

        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }

        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }

        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->sha1) {
            $res['Sha1'] = $this->sha1;
        }

        if (null !== $this->sha256) {
            $res['Sha256'] = $this->sha256;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n1 = 0;
                foreach ($map['Details'] as $item1) {
                    $model->details[$n1] = details::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DisplaySandboxResult'])) {
            $model->displaySandboxResult = $map['DisplaySandboxResult'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }

        if (isset($map['HasSubEvent'])) {
            $model->hasSubEvent = $map['HasSubEvent'];
        }

        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }

        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }

        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['Sha1'])) {
            $model->sha1 = $map['Sha1'];
        }

        if (isset($map['Sha256'])) {
            $model->sha256 = $map['Sha256'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
