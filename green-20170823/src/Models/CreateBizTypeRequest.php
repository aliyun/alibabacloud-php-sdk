<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class CreateBizTypeRequest extends Model
{
    /**
     * @var string
     */
    public $bizTypeImport;

    /**
     * @var string
     */
    public $bizTypeName;

    /**
     * @var bool
     */
    public $citeTemplate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $industryInfo;
    protected $_name = [
        'bizTypeImport' => 'BizTypeImport',
        'bizTypeName'   => 'BizTypeName',
        'citeTemplate'  => 'CiteTemplate',
        'description'   => 'Description',
        'industryInfo'  => 'IndustryInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizTypeImport) {
            $res['BizTypeImport'] = $this->bizTypeImport;
        }
        if (null !== $this->bizTypeName) {
            $res['BizTypeName'] = $this->bizTypeName;
        }
        if (null !== $this->citeTemplate) {
            $res['CiteTemplate'] = $this->citeTemplate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->industryInfo) {
            $res['IndustryInfo'] = $this->industryInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBizTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizTypeImport'])) {
            $model->bizTypeImport = $map['BizTypeImport'];
        }
        if (isset($map['BizTypeName'])) {
            $model->bizTypeName = $map['BizTypeName'];
        }
        if (isset($map['CiteTemplate'])) {
            $model->citeTemplate = $map['CiteTemplate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IndustryInfo'])) {
            $model->industryInfo = $map['IndustryInfo'];
        }

        return $model;
    }
}
