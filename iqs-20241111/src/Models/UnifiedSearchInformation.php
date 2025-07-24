<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Tea\Model;

class UnifiedSearchInformation extends Model
{
    /**
     * @var int
     */
    public $searchTime;
    protected $_name = [
        'searchTime' => 'searchTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchTime) {
            $res['searchTime'] = $this->searchTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnifiedSearchInformation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['searchTime'])) {
            $model->searchTime = $map['searchTime'];
        }

        return $model;
    }
}
