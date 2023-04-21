<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCustomizedListHeadersRequest;

use AlibabaCloud\Tea\Model;

class headers extends Model
{
    /**
     * @description The display type of the header.
     *
     * @example display
     *
     * @var string
     */
    public $displayType;

    /**
     * @description The key of the header.
     *
     * @example pay_type
     *
     * @var string
     */
    public $headerKey;
    protected $_name = [
        'displayType' => 'DisplayType',
        'headerKey'   => 'HeaderKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayType) {
            $res['DisplayType'] = $this->displayType;
        }
        if (null !== $this->headerKey) {
            $res['HeaderKey'] = $this->headerKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return headers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayType'])) {
            $model->displayType = $map['DisplayType'];
        }
        if (isset($map['HeaderKey'])) {
            $model->headerKey = $map['HeaderKey'];
        }

        return $model;
    }
}
