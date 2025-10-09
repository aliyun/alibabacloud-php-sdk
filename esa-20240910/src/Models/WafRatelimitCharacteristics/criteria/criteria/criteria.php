<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafRatelimitCharacteristics\criteria\criteria;

use AlibabaCloud\Dara\Model;

class criteria extends Model
{
    /**
     * @var string
     */
    public $matchType;
    protected $_name = [
        'matchType' => 'MatchType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
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
        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }

        return $model;
    }
}
