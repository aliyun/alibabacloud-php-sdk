<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceConfigResponse;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $bizName;

    /**
     * @var int
     */
    public $gmtUpdated;
    protected $_name = [
        'bizType'    => 'BizType',
        'bizName'    => 'BizName',
        'gmtUpdated' => 'GmtUpdated',
    ];

    public function validate()
    {
        Model::validateRequired('bizType', $this->bizType, true);
        Model::validateRequired('bizName', $this->bizName, true);
        Model::validateRequired('gmtUpdated', $this->gmtUpdated, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->gmtUpdated) {
            $res['GmtUpdated'] = $this->gmtUpdated;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['GmtUpdated'])) {
            $model->gmtUpdated = $map['GmtUpdated'];
        }

        return $model;
    }
}
