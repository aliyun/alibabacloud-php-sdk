<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListInventorySynchronizationJobsResponseBody\inventorySynchronizationJobs\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListInventorySynchronizationJobsResponseBody\inventorySynchronizationJobs\result\agentStatistics\created;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListInventorySynchronizationJobsResponseBody\inventorySynchronizationJobs\result\agentStatistics\deleted;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListInventorySynchronizationJobsResponseBody\inventorySynchronizationJobs\result\agentStatistics\same;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListInventorySynchronizationJobsResponseBody\inventorySynchronizationJobs\result\agentStatistics\updated;

class agentStatistics extends Model
{
    /**
     * @var created
     */
    public $created;

    /**
     * @var deleted
     */
    public $deleted;

    /**
     * @var same
     */
    public $same;

    /**
     * @var updated
     */
    public $updated;
    protected $_name = [
        'created' => 'Created',
        'deleted' => 'Deleted',
        'same' => 'Same',
        'updated' => 'Updated',
    ];

    public function validate()
    {
        if (null !== $this->created) {
            $this->created->validate();
        }
        if (null !== $this->deleted) {
            $this->deleted->validate();
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
        if (null !== $this->created) {
            $res['Created'] = null !== $this->created ? $this->created->toArray($noStream) : $this->created;
        }

        if (null !== $this->deleted) {
            $res['Deleted'] = null !== $this->deleted ? $this->deleted->toArray($noStream) : $this->deleted;
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
        if (isset($map['Created'])) {
            $model->created = created::fromMap($map['Created']);
        }

        if (isset($map['Deleted'])) {
            $model->deleted = deleted::fromMap($map['Deleted']);
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
