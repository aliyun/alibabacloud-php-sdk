<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\QuerySyncResultResponseBody;

use AlibabaCloud\Dara\Model;

class memberStats extends Model
{
    /**
     * @var int
     */
    public $failed;

    /**
     * @var int
     */
    public $relationshipAdded;

    /**
     * @var int
     */
    public $relationshipRemoved;

    /**
     * @var int
     */
    public $totalExternal;

    /**
     * @var int
     */
    public $unchanged;
    protected $_name = [
        'failed' => 'failed',
        'relationshipAdded' => 'relationshipAdded',
        'relationshipRemoved' => 'relationshipRemoved',
        'totalExternal' => 'totalExternal',
        'unchanged' => 'unchanged',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failed) {
            $res['failed'] = $this->failed;
        }

        if (null !== $this->relationshipAdded) {
            $res['relationshipAdded'] = $this->relationshipAdded;
        }

        if (null !== $this->relationshipRemoved) {
            $res['relationshipRemoved'] = $this->relationshipRemoved;
        }

        if (null !== $this->totalExternal) {
            $res['totalExternal'] = $this->totalExternal;
        }

        if (null !== $this->unchanged) {
            $res['unchanged'] = $this->unchanged;
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
        if (isset($map['failed'])) {
            $model->failed = $map['failed'];
        }

        if (isset($map['relationshipAdded'])) {
            $model->relationshipAdded = $map['relationshipAdded'];
        }

        if (isset($map['relationshipRemoved'])) {
            $model->relationshipRemoved = $map['relationshipRemoved'];
        }

        if (isset($map['totalExternal'])) {
            $model->totalExternal = $map['totalExternal'];
        }

        if (isset($map['unchanged'])) {
            $model->unchanged = $map['unchanged'];
        }

        return $model;
    }
}
