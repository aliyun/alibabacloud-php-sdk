<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsResponseBody\synchronizationJobs\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsResponseBody\synchronizationJobs\result\userStatistics\binded;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsResponseBody\synchronizationJobs\result\userStatistics\created;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsResponseBody\synchronizationJobs\result\userStatistics\deleted;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsResponseBody\synchronizationJobs\result\userStatistics\exported;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsResponseBody\synchronizationJobs\result\userStatistics\pushed;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsResponseBody\synchronizationJobs\result\userStatistics\same;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListSynchronizationJobsResponseBody\synchronizationJobs\result\userStatistics\updated;

class userStatistics extends Model
{
    /**
     * @var binded
     */
    public $binded;
    /**
     * @var created
     */
    public $created;
    /**
     * @var deleted
     */
    public $deleted;
    /**
     * @var exported
     */
    public $exported;
    /**
     * @var pushed
     */
    public $pushed;
    /**
     * @var same
     */
    public $same;
    /**
     * @var updated
     */
    public $updated;
    protected $_name = [
        'binded'   => 'Binded',
        'created'  => 'Created',
        'deleted'  => 'Deleted',
        'exported' => 'Exported',
        'pushed'   => 'Pushed',
        'same'     => 'Same',
        'updated'  => 'Updated',
    ];

    public function validate()
    {
        if (null !== $this->binded) {
            $this->binded->validate();
        }
        if (null !== $this->created) {
            $this->created->validate();
        }
        if (null !== $this->deleted) {
            $this->deleted->validate();
        }
        if (null !== $this->exported) {
            $this->exported->validate();
        }
        if (null !== $this->pushed) {
            $this->pushed->validate();
        }
        if (null !== $this->same) {
            $this->same->validate();
        }
        if (null !== $this->updated) {
            $this->updated->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->binded) {
            $res['Binded'] = null !== $this->binded ? $this->binded->toArray($noStream) : $this->binded;
        }

        if (null !== $this->created) {
            $res['Created'] = null !== $this->created ? $this->created->toArray($noStream) : $this->created;
        }

        if (null !== $this->deleted) {
            $res['Deleted'] = null !== $this->deleted ? $this->deleted->toArray($noStream) : $this->deleted;
        }

        if (null !== $this->exported) {
            $res['Exported'] = null !== $this->exported ? $this->exported->toArray($noStream) : $this->exported;
        }

        if (null !== $this->pushed) {
            $res['Pushed'] = null !== $this->pushed ? $this->pushed->toArray($noStream) : $this->pushed;
        }

        if (null !== $this->same) {
            $res['Same'] = null !== $this->same ? $this->same->toArray($noStream) : $this->same;
        }

        if (null !== $this->updated) {
            $res['Updated'] = null !== $this->updated ? $this->updated->toArray($noStream) : $this->updated;
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
        if (isset($map['Binded'])) {
            $model->binded = binded::fromMap($map['Binded']);
        }

        if (isset($map['Created'])) {
            $model->created = created::fromMap($map['Created']);
        }

        if (isset($map['Deleted'])) {
            $model->deleted = deleted::fromMap($map['Deleted']);
        }

        if (isset($map['Exported'])) {
            $model->exported = exported::fromMap($map['Exported']);
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
