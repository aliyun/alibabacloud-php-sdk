<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCustomizedListHeadersResponseBody;

use AlibabaCloud\Tea\Model;

class headers extends Model
{
    /**
     * @description The display type of the header. You can call the `ModifyCustomizedListHeaders` operation to modify the display type of the header.
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

    /**
     * @description The name of the header.
     *
     * @example Cloud Desktop ID/Name
     *
     * @var string
     */
    public $headerName;
    protected $_name = [
        'displayType' => 'DisplayType',
        'headerKey'   => 'HeaderKey',
        'headerName'  => 'HeaderName',
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
        if (null !== $this->headerName) {
            $res['HeaderName'] = $this->headerName;
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
        if (isset($map['HeaderName'])) {
            $model->headerName = $map['HeaderName'];
        }

        return $model;
    }
}
