<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListObjectScanEventResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListObjectScanEventResponseBody\data\details;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the OSS bucket.
     *
     * @example hz-new01****
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The details of the file.
     *
     * @var details[]
     */
    public $details;

    /**
     * @description Indicates whether the file can be detected by cloud sandbox. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $displaySandboxResult;

    /**
     * @description The ID of the alert.
     *
     * @example 911273
     *
     * @var int
     */
    public $eventId;

    /**
     * @description The name of the alert.
     *
     * @example WebShell
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The path to the file.
     *
     * @example /usr/local****
     *
     * @var string
     */
    public $filePath;

    /**
     * @description The timestamp at which the alert was first detected.
     *
     * @example 1694576692000
     *
     * @var int
     */
    public $firstTime;

    /**
     * @description The timestamp at which the alert was last detected.
     *
     * @example 1694576692000
     *
     * @var int
     */
    public $lastTime;

    /**
     * @description The MD5 hash value of the file.
     *
     * @example 5b394b54ca632fe51c4ab4a6dbaf****
     *
     * @var string
     */
    public $md5;

    /**
     * @description The key of the file that is stored in the OSS bucket.
     *
     * @example 1/2023/07/21/10/18/16899059356518bcf6c64-a04e-492d-a421-4ae8b888****
     *
     * @var string
     */
    public $ossKey;

    /**
     * @description The risk level of the alert. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example medium
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The SHA-1 hash value of the file.
     *
     * @example 3c01bdbb26f358bab27f267924aa2c9a03fc****
     *
     * @var string
     */
    public $sha1;

    /**
     * @description The SHA-256 hash value of the file.
     *
     * @example 3a6fed5fc11392b3ee9f81caf017b48640d7458766a8eb0382899a605b41****
     *
     * @var string
     */
    public $sha256;

    /**
     * @description The method that is used to detect the malicious file. Valid values:
     *
     *   **API**: uses API operations.
     *   **OSS**: uses OSS file check.
     *
     * @example OSS
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'bucketName'           => 'BucketName',
        'details'              => 'Details',
        'displaySandboxResult' => 'DisplaySandboxResult',
        'eventId'              => 'EventId',
        'eventName'            => 'EventName',
        'filePath'             => 'FilePath',
        'firstTime'            => 'FirstTime',
        'lastTime'             => 'LastTime',
        'md5'                  => 'Md5',
        'ossKey'               => 'OssKey',
        'riskLevel'            => 'RiskLevel',
        'sha1'                 => 'Sha1',
        'sha256'               => 'Sha256',
        'source'               => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->details) {
            $res['Details'] = [];
            if (null !== $this->details && \is_array($this->details)) {
                $n = 0;
                foreach ($this->details as $item) {
                    $res['Details'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n              = 0;
                foreach ($map['Details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
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
