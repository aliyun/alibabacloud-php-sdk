<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20210602\Models\ListSkillsResponseBody\skills;

use AlibabaCloud\Dara\Model;

class skillVersions extends Model
{
    /**
     * @var string
     */
    public $changeLog;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $publishStatus;

    /**
     * @var string
     */
    public $securityScanFailReason;

    /**
     * @var int
     */
    public $securityScanScore;

    /**
     * @var string
     */
    public $securityScanStatus;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'changeLog' => 'ChangeLog',
        'createdAt' => 'CreatedAt',
        'publishStatus' => 'PublishStatus',
        'securityScanFailReason' => 'SecurityScanFailReason',
        'securityScanScore' => 'SecurityScanScore',
        'securityScanStatus' => 'SecurityScanStatus',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeLog) {
            $res['ChangeLog'] = $this->changeLog;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->publishStatus) {
            $res['PublishStatus'] = $this->publishStatus;
        }

        if (null !== $this->securityScanFailReason) {
            $res['SecurityScanFailReason'] = $this->securityScanFailReason;
        }

        if (null !== $this->securityScanScore) {
            $res['SecurityScanScore'] = $this->securityScanScore;
        }

        if (null !== $this->securityScanStatus) {
            $res['SecurityScanStatus'] = $this->securityScanStatus;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ChangeLog'])) {
            $model->changeLog = $map['ChangeLog'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['PublishStatus'])) {
            $model->publishStatus = $map['PublishStatus'];
        }

        if (isset($map['SecurityScanFailReason'])) {
            $model->securityScanFailReason = $map['SecurityScanFailReason'];
        }

        if (isset($map['SecurityScanScore'])) {
            $model->securityScanScore = $map['SecurityScanScore'];
        }

        if (isset($map['SecurityScanStatus'])) {
            $model->securityScanStatus = $map['SecurityScanStatus'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
