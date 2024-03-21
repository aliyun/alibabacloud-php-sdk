<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSLSRealTimeLogTypeResponseBody\content;

use AlibabaCloud\Tea\Model;

class business extends Model
{
    /**
     * @description The type of real-time logs. Valid values:
     *
     *   **dcdn_log_access_l1**: access logs.
     *   **dcdn_log_er**: EdgeRoutine logs
     *   **dcdn_log_waf**: WAF interception logs
     *
     * @example dcdn_log_access_l1
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The description of the real-time log type.
     *
     * @example product_U8JE
     *
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
