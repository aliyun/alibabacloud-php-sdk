<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsResponseBody\synchronizationJobs\result;

use AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsResponseBody\synchronizationJobs\result\groupMemberStatistics\binded;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsResponseBody\synchronizationJobs\result\groupMemberStatistics\created;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsResponseBody\synchronizationJobs\result\groupMemberStatistics\deleted;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsResponseBody\synchronizationJobs\result\groupMemberStatistics\pushed;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsResponseBody\synchronizationJobs\result\groupMemberStatistics\same;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsResponseBody\synchronizationJobs\result\groupMemberStatistics\updated;
use AlibabaCloud\Tea\Model;

class groupMemberStatistics extends Model
{
    /**
     * @description 绑定结果统计
     *
     * @var binded
     */
    public $binded;

    /**
     * @description 创建结果统计
     *
     * @var created
     */
    public $created;

    /**
     * @description 删除结果统计
     *
     * @var deleted
     */
    public $deleted;

    /**
     * @description 推送结果统计
     *
     * @var pushed
     */
    public $pushed;

    /**
     * @description 相同结果统计
     *
     * @var same
     */
    public $same;

    /**
     * @description 更新结果统计
     *
     * @var updated
     */
    public $updated;
    protected $_name = [
        'binded' => 'Binded',
        'created' => 'Created',
        'deleted' => 'Deleted',
        'pushed' => 'Pushed',
        'same' => 'Same',
        'updated' => 'Updated',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->binded) {
            $res['Binded'] = null !== $this->binded ? $this->binded->toMap() : null;
        }
        if (null !== $this->created) {
            $res['Created'] = null !== $this->created ? $this->created->toMap() : null;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = null !== $this->deleted ? $this->deleted->toMap() : null;
        }
        if (null !== $this->pushed) {
            $res['Pushed'] = null !== $this->pushed ? $this->pushed->toMap() : null;
        }
        if (null !== $this->same) {
            $res['Same'] = null !== $this->same ? $this->same->toMap() : null;
        }
        if (null !== $this->updated) {
            $res['Updated'] = null !== $this->updated ? $this->updated->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupMemberStatistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Binded'])) {
            $model->binded = binded::fromMap($map['Binded']);
        }
        if (isset($map['Created'])) {
            $model->created = created::fromMap($map['Created']);
        }
        if (isset($map['Deleted'])) {
            $model->deleted = deleted::fromMap($map['Deleted']);
        }
        if (isset($map['Pushed'])) {
            $model->pushed = pushed::fromMap($map['Pushed']);
        }
        if (isset($map['Same'])) {
            $model->same = same::fromMap($map['Same']);
        }
        if (isset($map['Updated'])) {
            $model->updated = updated::fromMap($map['Updated']);
        }

        return $model;
    }
}
