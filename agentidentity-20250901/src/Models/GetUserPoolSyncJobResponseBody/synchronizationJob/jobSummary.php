<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetUserPoolSyncJobResponseBody\synchronizationJob;

use AlibabaCloud\Dara\Model;

class jobSummary extends Model
{
    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $deleted;

    /**
     * @var string
     */
    public $same;

    /**
     * @var string
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }

        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }

        if (null !== $this->same) {
            $res['Same'] = $this->same;
        }

        if (null !== $this->updated) {
            $res['Updated'] = $this->updated;
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
            $model->created = $map['Created'];
        }

        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }

        if (isset($map['Same'])) {
            $model->same = $map['Same'];
        }

        if (isset($map['Updated'])) {
            $model->updated = $map['Updated'];
        }

        return $model;
    }
}
