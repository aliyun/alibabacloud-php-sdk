<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListAppReleaseStageExecutionIntegratedMetadataResponse;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListAppReleaseStageExecutionIntegratedMetadataResponse\body\changeRequests;

class body extends Model
{
    /**
     * @var string
     */
    public $releaseBranch;

    /**
     * @var string
     */
    public $releaseRevision;

    /**
     * @var string
     */
    public $repoUrl;

    /**
     * @var string
     */
    public $repoType;

    /**
     * @var changeRequests[]
     */
    public $changeRequests;
    protected $_name = [
        'releaseBranch' => 'releaseBranch',
        'releaseRevision' => 'releaseRevision',
        'repoUrl' => 'repoUrl',
        'repoType' => 'repoType',
        'changeRequests' => 'changeRequests',
    ];

    public function validate()
    {
        if (\is_array($this->changeRequests)) {
            Model::validateArray($this->changeRequests);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->releaseBranch) {
            $res['releaseBranch'] = $this->releaseBranch;
        }

        if (null !== $this->releaseRevision) {
            $res['releaseRevision'] = $this->releaseRevision;
        }

        if (null !== $this->repoUrl) {
            $res['repoUrl'] = $this->repoUrl;
        }

        if (null !== $this->repoType) {
            $res['repoType'] = $this->repoType;
        }

        if (null !== $this->changeRequests) {
            if (\is_array($this->changeRequests)) {
                $res['changeRequests'] = [];
                $n1 = 0;
                foreach ($this->changeRequests as $item1) {
                    $res['changeRequests'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['releaseBranch'])) {
            $model->releaseBranch = $map['releaseBranch'];
        }

        if (isset($map['releaseRevision'])) {
            $model->releaseRevision = $map['releaseRevision'];
        }

        if (isset($map['repoUrl'])) {
            $model->repoUrl = $map['repoUrl'];
        }

        if (isset($map['repoType'])) {
            $model->repoType = $map['repoType'];
        }

        if (isset($map['changeRequests'])) {
            if (!empty($map['changeRequests'])) {
                $model->changeRequests = [];
                $n1 = 0;
                foreach ($map['changeRequests'] as $item1) {
                    $model->changeRequests[$n1] = changeRequests::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
