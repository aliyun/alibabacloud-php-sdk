<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribePolarClawCronJobsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var bool
     */
    public $includeDisabled;

    /**
     * @var bool
     */
    public $includeRuns;

    /**
     * @var string
     */
    public $jobIdListShrink;

    /**
     * @var int
     */
    public $runLimit;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'includeDisabled' => 'IncludeDisabled',
        'includeRuns' => 'IncludeRuns',
        'jobIdListShrink' => 'JobIdList',
        'runLimit' => 'RunLimit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->includeDisabled) {
            $res['IncludeDisabled'] = $this->includeDisabled;
        }

        if (null !== $this->includeRuns) {
            $res['IncludeRuns'] = $this->includeRuns;
        }

        if (null !== $this->jobIdListShrink) {
            $res['JobIdList'] = $this->jobIdListShrink;
        }

        if (null !== $this->runLimit) {
            $res['RunLimit'] = $this->runLimit;
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

        if (isset($map['IncludeDisabled'])) {
            $model->includeDisabled = $map['IncludeDisabled'];
        }

        if (isset($map['IncludeRuns'])) {
            $model->includeRuns = $map['IncludeRuns'];
        }

        if (isset($map['JobIdList'])) {
            $model->jobIdListShrink = $map['JobIdList'];
        }

        if (isset($map['RunLimit'])) {
            $model->runLimit = $map['RunLimit'];
        }

        return $model;
    }
}
