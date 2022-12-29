<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetOpportunityMarketRequest extends Model
{
    /**
     * @example [1623]
     *
     * @var string
     */
    public $cateIds;

    /**
     * @example 4
     *
     * @var int
     */
    public $timeDisplay;
    protected $_name = [
        'cateIds'     => 'CateIds',
        'timeDisplay' => 'TimeDisplay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cateIds) {
            $res['CateIds'] = $this->cateIds;
        }
        if (null !== $this->timeDisplay) {
            $res['TimeDisplay'] = $this->timeDisplay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOpportunityMarketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CateIds'])) {
            $model->cateIds = $map['CateIds'];
        }
        if (isset($map['TimeDisplay'])) {
            $model->timeDisplay = $map['TimeDisplay'];
        }

        return $model;
    }
}
