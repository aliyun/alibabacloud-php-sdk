<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAlertTypeResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $alertType;

    /**
     * @var string
     */
    public $alertTypeCategory;

    /**
     * @var string
     */
    public $alertTypeCategoryMds;

    /**
     * @var int
     */
    public $alertTypeCategoryOrder;

    /**
     * @var string
     */
    public $alertTypeMds;

    /**
     * @var string
     */
    public $alertTypeNameEn;

    /**
     * @var string
     */
    public $alertTypeNameZh;
    protected $_name = [
        'alertType' => 'AlertType',
        'alertTypeCategory' => 'AlertTypeCategory',
        'alertTypeCategoryMds' => 'AlertTypeCategoryMds',
        'alertTypeCategoryOrder' => 'AlertTypeCategoryOrder',
        'alertTypeMds' => 'AlertTypeMds',
        'alertTypeNameEn' => 'AlertTypeNameEn',
        'alertTypeNameZh' => 'AlertTypeNameZh',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }

        if (null !== $this->alertTypeCategory) {
            $res['AlertTypeCategory'] = $this->alertTypeCategory;
        }

        if (null !== $this->alertTypeCategoryMds) {
            $res['AlertTypeCategoryMds'] = $this->alertTypeCategoryMds;
        }

        if (null !== $this->alertTypeCategoryOrder) {
            $res['AlertTypeCategoryOrder'] = $this->alertTypeCategoryOrder;
        }

        if (null !== $this->alertTypeMds) {
            $res['AlertTypeMds'] = $this->alertTypeMds;
        }

        if (null !== $this->alertTypeNameEn) {
            $res['AlertTypeNameEn'] = $this->alertTypeNameEn;
        }

        if (null !== $this->alertTypeNameZh) {
            $res['AlertTypeNameZh'] = $this->alertTypeNameZh;
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
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }

        if (isset($map['AlertTypeCategory'])) {
            $model->alertTypeCategory = $map['AlertTypeCategory'];
        }

        if (isset($map['AlertTypeCategoryMds'])) {
            $model->alertTypeCategoryMds = $map['AlertTypeCategoryMds'];
        }

        if (isset($map['AlertTypeCategoryOrder'])) {
            $model->alertTypeCategoryOrder = $map['AlertTypeCategoryOrder'];
        }

        if (isset($map['AlertTypeMds'])) {
            $model->alertTypeMds = $map['AlertTypeMds'];
        }

        if (isset($map['AlertTypeNameEn'])) {
            $model->alertTypeNameEn = $map['AlertTypeNameEn'];
        }

        if (isset($map['AlertTypeNameZh'])) {
            $model->alertTypeNameZh = $map['AlertTypeNameZh'];
        }

        return $model;
    }
}
