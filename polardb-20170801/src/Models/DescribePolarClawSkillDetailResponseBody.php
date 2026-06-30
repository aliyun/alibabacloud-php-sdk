<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawSkillDetailResponseBody\latestVersion;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawSkillDetailResponseBody\owner;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawSkillDetailResponseBody\skill;

class DescribePolarClawSkillDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var latestVersion
     */
    public $latestVersion;

    /**
     * @var string
     */
    public $message;

    /**
     * @var owner
     */
    public $owner;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var skill
     */
    public $skill;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'code' => 'Code',
        'latestVersion' => 'LatestVersion',
        'message' => 'Message',
        'owner' => 'Owner',
        'requestId' => 'RequestId',
        'skill' => 'Skill',
    ];

    public function validate()
    {
        if (null !== $this->latestVersion) {
            $this->latestVersion->validate();
        }
        if (null !== $this->owner) {
            $this->owner->validate();
        }
        if (null !== $this->skill) {
            $this->skill->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = null !== $this->latestVersion ? $this->latestVersion->toArray($noStream) : $this->latestVersion;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->owner) {
            $res['Owner'] = null !== $this->owner ? $this->owner->toArray($noStream) : $this->owner;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->skill) {
            $res['Skill'] = null !== $this->skill ? $this->skill->toArray($noStream) : $this->skill;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['LatestVersion'])) {
            $model->latestVersion = latestVersion::fromMap($map['LatestVersion']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Owner'])) {
            $model->owner = owner::fromMap($map['Owner']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Skill'])) {
            $model->skill = skill::fromMap($map['Skill']);
        }

        return $model;
    }
}
