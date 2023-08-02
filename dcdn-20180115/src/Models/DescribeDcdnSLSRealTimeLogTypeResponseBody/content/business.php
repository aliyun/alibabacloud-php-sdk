<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSLSRealTimeLogTypeResponseBody\content;

use AlibabaCloud\Tea\Model;

class business extends Model
{
    /**
     * @example dcdn_log_access_l1
     *
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $desc;
    protected $_name = [
        'businessType' => 'BusinessType',
        'desc'         => 'Desc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return business
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        return $model;
    }
}
