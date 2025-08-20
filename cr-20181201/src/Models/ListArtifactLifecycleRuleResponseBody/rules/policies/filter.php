<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListArtifactLifecycleRuleResponseBody\rules\policies;

use AlibabaCloud\Dara\Model;

class filter extends Model
{
    /**
     * @var string
     */
    public $tagWildcard;
    protected $_name = [
        'tagWildcard' => 'TagWildcard',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagWildcard) {
            $res['TagWildcard'] = $this->tagWildcard;
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
        if (isset($map['TagWildcard'])) {
            $model->tagWildcard = $map['TagWildcard'];
        }

        return $model;
    }
}
