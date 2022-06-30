<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetStyleTopRequest extends Model
{
    /**
     * @description A short description of struct
     *
     * @var string
     */
    public $cateIds;

    /**
     * @var int
     */
    public $sortOrder;

    /**
     * @var int
     */
    public $timeDisplay;
    protected $_name = [
        'cateIds'     => 'CateIds',
        'sortOrder'   => 'SortOrder',
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
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->timeDisplay) {
            $res['TimeDisplay'] = $this->timeDisplay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStyleTopRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CateIds'])) {
            $model->cateIds = $map['CateIds'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['TimeDisplay'])) {
            $model->timeDisplay = $map['TimeDisplay'];
        }

        return $model;
    }
}
