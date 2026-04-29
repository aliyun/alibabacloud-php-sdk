<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribePolarClawCronJobsRequest extends Model
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
     * @var string[]
     */
    public $jobIdList;

    /**
     * @var int
     */
    public $runLimit;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'includeDisabled' => 'IncludeDisabled',
        'includeRuns' => 'IncludeRuns',
        'jobIdList' => 'JobIdList',
        'runLimit' => 'RunLimit',
    ];

    public function validate()
    {
        if (\is_array($this->jobIdList)) {
            Model::validateArray($this->jobIdList);
        }
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

        if (null !== $this->jobIdList) {
            if (\is_array($this->jobIdList)) {
                $res['JobIdList'] = [];
                $n1 = 0;
                foreach ($this->jobIdList as $item1) {
                    $res['JobIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['JobIdList'])) {
                $model->jobIdList = [];
                $n1 = 0;
                foreach ($map['JobIdList'] as $item1) {
                    $model->jobIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RunLimit'])) {
            $model->runLimit = $map['RunLimit'];
        }

        return $model;
    }
}
