<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Tea\Model;

class ValueAddedCredits extends Model
{
    /**
     * @var int
     */
    public $advanced;

    /**
     * @var int
     */
    public $summary;
    protected $_name = [
        'advanced' => 'advanced',
        'summary' => 'summary',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->advanced) {
            $res['advanced'] = $this->advanced;
        }
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValueAddedCredits
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['advanced'])) {
            $model->advanced = $map['advanced'];
        }
        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }

        return $model;
    }
}
