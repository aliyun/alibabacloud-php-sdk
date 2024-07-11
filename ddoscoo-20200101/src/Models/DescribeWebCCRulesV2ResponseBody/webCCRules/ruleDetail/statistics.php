<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2ResponseBody\webCCRules\ruleDetail;

use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @description The statistical method. Valid values:
     *
     *   **ip**
     *   **header**
     *   **uri**
     *
     * @example uri
     *
     * @var string
     */
    public $field;

    /**
     * @description The name of the header. This parameter is required only when the Field parameter is set to header.
     *
     * @example hello
     *
     * @var string
     */
    public $headerName;

    /**
     * @description Indicates whether the system collects statistics after deduplication. Valid values:
     *
     *   **count**: The system collects statistics before deduplication.
     *   **distinct**: The system collects statistics after deduplication.
     *
     * @example count
     *
     * @var string
     */
    public $mode;
    protected $_name = [
        'field'      => 'Field',
        'headerName' => 'HeaderName',
        'mode'       => 'Mode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->headerName) {
            $res['HeaderName'] = $this->headerName;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['HeaderName'])) {
            $model->headerName = $map['HeaderName'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
