<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetWafQuotaResponseBody\quota;

use AlibabaCloud\SDK\ESA\V20240910\Models\QuotaPageContentTypesValue;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafQuotaInteger;
use AlibabaCloud\Tea\Model;

class page extends Model
{
    /**
     * @description An object containing quota information for each Content-Type in custom response pages.
     *
     * @var QuotaPageContentTypesValue[]
     */
    public $contentTypes;

    /**
     * @description Indicates whether the custom response page is enabled.
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The total number quota allowed for custom response pages.
     *
     * @var WafQuotaInteger
     */
    public $numberTotal;
    protected $_name = [
        'contentTypes' => 'ContentTypes',
        'enable' => 'Enable',
        'numberTotal' => 'NumberTotal',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentTypes) {
            $res['ContentTypes'] = [];
            if (null !== $this->contentTypes && \is_array($this->contentTypes)) {
                foreach ($this->contentTypes as $key => $val) {
                    $res['ContentTypes'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->numberTotal) {
            $res['NumberTotal'] = null !== $this->numberTotal ? $this->numberTotal->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return page
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentTypes'])) {
            $model->contentTypes = $map['ContentTypes'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['NumberTotal'])) {
            $model->numberTotal = WafQuotaInteger::fromMap($map['NumberTotal']);
        }

        return $model;
    }
}
