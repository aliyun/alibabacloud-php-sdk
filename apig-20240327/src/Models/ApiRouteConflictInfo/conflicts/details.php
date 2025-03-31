<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo\conflicts;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo\conflicts\details\conflictingMatch;
use AlibabaCloud\SDK\APIG\V20240327\Models\ApiRouteConflictInfo\conflicts\details\detectedMatch;

class details extends Model
{
    /**
     * @var conflictingMatch
     */
    public $conflictingMatch;

    /**
     * @var detectedMatch
     */
    public $detectedMatch;

    /**
     * @var string
     */
    public $level;
    protected $_name = [
        'conflictingMatch' => 'conflictingMatch',
        'detectedMatch' => 'detectedMatch',
        'level' => 'level',
    ];

    public function validate()
    {
        if (null !== $this->conflictingMatch) {
            $this->conflictingMatch->validate();
        }
        if (null !== $this->detectedMatch) {
            $this->detectedMatch->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conflictingMatch) {
            $res['conflictingMatch'] = null !== $this->conflictingMatch ? $this->conflictingMatch->toArray($noStream) : $this->conflictingMatch;
        }

        if (null !== $this->detectedMatch) {
            $res['detectedMatch'] = null !== $this->detectedMatch ? $this->detectedMatch->toArray($noStream) : $this->detectedMatch;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
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
        if (isset($map['conflictingMatch'])) {
            $model->conflictingMatch = conflictingMatch::fromMap($map['conflictingMatch']);
        }

        if (isset($map['detectedMatch'])) {
            $model->detectedMatch = detectedMatch::fromMap($map['detectedMatch']);
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        return $model;
    }
}
