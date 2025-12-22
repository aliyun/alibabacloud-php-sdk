<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\SearchStrategy;

use AlibabaCloud\Dara\Model;

class mergeConfig extends Model
{
    /**
     * @var int
     */
    public $docCount;

    /**
     * @var string
     */
    public $rankName;
    protected $_name = [
        'docCount' => 'docCount',
        'rankName' => 'rankName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docCount) {
            $res['docCount'] = $this->docCount;
        }

        if (null !== $this->rankName) {
            $res['rankName'] = $this->rankName;
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
        if (isset($map['docCount'])) {
            $model->docCount = $map['docCount'];
        }

        if (isset($map['rankName'])) {
            $model->rankName = $map['rankName'];
        }

        return $model;
    }
}
