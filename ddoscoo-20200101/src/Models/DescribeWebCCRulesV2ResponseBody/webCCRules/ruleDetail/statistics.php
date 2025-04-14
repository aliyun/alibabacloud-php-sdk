<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2ResponseBody\webCCRules\ruleDetail;

use AlibabaCloud\Dara\Model;

class statistics extends Model
{
    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $headerName;

    /**
     * @var string
     */
    public $mode;
    protected $_name = [
        'field' => 'Field',
        'headerName' => 'HeaderName',
        'mode' => 'Mode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
