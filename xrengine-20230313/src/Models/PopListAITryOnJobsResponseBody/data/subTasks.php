<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data;

use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data\subTasks\feedback;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data\subTasks\subProjectInfo;
use AlibabaCloud\Tea\Model;

class subTasks extends Model
{
    /**
     * @var feedback
     */
    public $feedback;

    /**
     * @var subProjectInfo
     */
    public $subProjectInfo;
    protected $_name = [
        'feedback'       => 'Feedback',
        'subProjectInfo' => 'SubProjectInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->feedback) {
            $res['Feedback'] = null !== $this->feedback ? $this->feedback->toMap() : null;
        }
        if (null !== $this->subProjectInfo) {
            $res['SubProjectInfo'] = null !== $this->subProjectInfo ? $this->subProjectInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Feedback'])) {
            $model->feedback = feedback::fromMap($map['Feedback']);
        }
        if (isset($map['SubProjectInfo'])) {
            $model->subProjectInfo = subProjectInfo::fromMap($map['SubProjectInfo']);
        }

        return $model;
    }
}
