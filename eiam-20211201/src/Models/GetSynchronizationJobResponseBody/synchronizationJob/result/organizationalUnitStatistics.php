<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob\result;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob\result\organizationalUnitStatistics\binded;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob\result\organizationalUnitStatistics\created;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob\result\organizationalUnitStatistics\deleted;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob\result\organizationalUnitStatistics\pushed;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob\result\organizationalUnitStatistics\same;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetSynchronizationJobResponseBody\synchronizationJob\result\organizationalUnitStatistics\updated;
use AlibabaCloud\Tea\Model;

class organizationalUnitStatistics extends Model
{
    /**
     * @description The binding result statistics.
     *
     * @var binded
     */
    public $binded;

    /**
     * @description The creation result statistics.
     *
     * @var created
     */
    public $created;

    /**
     * @description The deletion result statistics.
     *
     * @var deleted
     */
    public $deleted;

    /**
     * @description The notification result statistics.
     *
     * @var pushed
     */
    public $pushed;

    /**
     * @description The result statistics about identical organizations.
     *
     * @var same
     */
    public $same;

    /**
     * @description The update result statistics.
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
     * @return organizationalUnitStatistics
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
