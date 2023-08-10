<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\SearchStrategy;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return mergeConfig
     */
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
