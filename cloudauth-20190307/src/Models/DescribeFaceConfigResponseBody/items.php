<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceConfigResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $gmtUpdated;

    /**
     * @var string
     */
    public $bizName;

    /**
     * @var string
     */
    public $bizType;
    protected $_name = [
        'gmtUpdated' => 'GmtUpdated',
        'bizName'    => 'BizName',
        'bizType'    => 'BizType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtUpdated) {
            $res['GmtUpdated'] = $this->gmtUpdated;
        }
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtUpdated'])) {
            $model->gmtUpdated = $map['GmtUpdated'];
        }
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        return $model;
    }
}
