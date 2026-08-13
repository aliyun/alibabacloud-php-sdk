<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\QuerySyncResultResponseBody;

use AlibabaCloud\Dara\Model;

class deptStats extends Model
{
    /**
     * @var int
     */
    public $created;

    /**
     * @var int
     */
    public $deleted;

    /**
     * @var int
     */
    public $moved;

    /**
     * @var int
     */
    public $renamed;

    /**
     * @var int
     */
    public $skipped;

    /**
     * @var int
     */
    public $totalExternal;
    protected $_name = [
        'created' => 'created',
        'deleted' => 'deleted',
        'moved' => 'moved',
        'renamed' => 'renamed',
        'skipped' => 'skipped',
        'totalExternal' => 'totalExternal',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }

        if (null !== $this->deleted) {
            $res['deleted'] = $this->deleted;
        }

        if (null !== $this->moved) {
            $res['moved'] = $this->moved;
        }

        if (null !== $this->renamed) {
            $res['renamed'] = $this->renamed;
        }

        if (null !== $this->skipped) {
            $res['skipped'] = $this->skipped;
        }

        if (null !== $this->totalExternal) {
            $res['totalExternal'] = $this->totalExternal;
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
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }

        if (isset($map['deleted'])) {
            $model->deleted = $map['deleted'];
        }

        if (isset($map['moved'])) {
            $model->moved = $map['moved'];
        }

        if (isset($map['renamed'])) {
            $model->renamed = $map['renamed'];
        }

        if (isset($map['skipped'])) {
            $model->skipped = $map['skipped'];
        }

        if (isset($map['totalExternal'])) {
            $model->totalExternal = $map['totalExternal'];
        }

        return $model;
    }
}
