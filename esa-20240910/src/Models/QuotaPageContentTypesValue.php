<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class QuotaPageContentTypesValue extends Model
{
    /**
     * @description Indicates whether the custom error pages of the Content-Type are configured.
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The maximum length of the custom error pages of the Content-Type.
     *
     * @var WafQuotaInteger
     */
    public $contentLength;
    protected $_name = [
        'enable'        => 'Enable',
        'contentLength' => 'ContentLength',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->contentLength) {
            $res['ContentLength'] = null !== $this->contentLength ? $this->contentLength->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuotaPageContentTypesValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['ContentLength'])) {
            $model->contentLength = WafQuotaInteger::fromMap($map['ContentLength']);
        }

        return $model;
    }
}
