<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20260120\Models;

use AlibabaCloud\Dara\Model;

class ListTotalSensitiveInfoRequest extends Model
{
    /**
     * @var int
     */
    public $countType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productCodeList;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'countType' => 'CountType',
        'lang' => 'Lang',
        'productCode' => 'ProductCode',
        'productCodeList' => 'ProductCodeList',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->countType) {
            $res['CountType'] = $this->countType;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productCodeList) {
            $res['ProductCodeList'] = $this->productCodeList;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['CountType'])) {
            $model->countType = $map['CountType'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductCodeList'])) {
            $model->productCodeList = $map['ProductCodeList'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
