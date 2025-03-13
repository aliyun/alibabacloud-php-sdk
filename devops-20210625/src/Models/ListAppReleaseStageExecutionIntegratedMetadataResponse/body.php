<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListAppReleaseStageExecutionIntegratedMetadataResponse;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListAppReleaseStageExecutionIntegratedMetadataResponse\body\changeRequests;
use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @example release/20240625-152603220321211_release_3252057_1
     *
     * @var string
     */
    public $releaseBranch;

    /**
     * @example a66cfa8c6869b96bb7d111ba2144c9c764d556b7
     *
     * @var string
     */
    public $releaseRevision;

    /**
     * @example https://codeup.aliyun.com/60d54f3daccf2bbd6659f3ad/auto-test.git
     *
     * @var string
     */
    public $repoUrl;

    /**
     * @example CODEUP
     *
     * @var string
     */
    public $repoType;

    /**
     * @var changeRequests[]
     */
    public $changeRequests;
    protected $_name = [
        'releaseBranch'   => 'releaseBranch',
        'releaseRevision' => 'releaseRevision',
        'repoUrl'         => 'repoUrl',
        'repoType'        => 'repoType',
        'changeRequests'  => 'changeRequests',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['changeRequests'] = [];
            if (null !== $this->changeRequests && \is_array($this->changeRequests)) {
                $n = 0;
                foreach ($this->changeRequests as $item) {
                    $res['changeRequests'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
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
                $n                     = 0;
                foreach ($map['changeRequests'] as $item) {
                    $model->changeRequests[$n++] = null !== $item ? changeRequests::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
