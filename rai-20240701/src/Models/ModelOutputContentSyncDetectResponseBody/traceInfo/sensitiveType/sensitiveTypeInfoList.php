<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\ModelOutputContentSyncDetectResponseBody\traceInfo\sensitiveType;

use AlibabaCloud\Dara\Model;

class sensitiveTypeInfoList extends Model
{
    /**
     * @var int
     */
    public $actionType;

    /**
     * @var string
     */
    public $maskedContent;

    /**
     * @var int
     */
    public $sensitiveCategory;

    /**
     * @var string
     */
    public $sensitiveContent;

    /**
     * @var string
     */
    public $sensitiveTypeName;
    protected $_name = [
        'actionType' => 'ActionType',
        'maskedContent' => 'MaskedContent',
        'sensitiveCategory' => 'SensitiveCategory',
        'sensitiveContent' => 'SensitiveContent',
        'sensitiveTypeName' => 'SensitiveTypeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }

        if (null !== $this->maskedContent) {
            $res['MaskedContent'] = $this->maskedContent;
        }

        if (null !== $this->sensitiveCategory) {
            $res['SensitiveCategory'] = $this->sensitiveCategory;
        }

        if (null !== $this->sensitiveContent) {
            $res['SensitiveContent'] = $this->sensitiveContent;
        }

        if (null !== $this->sensitiveTypeName) {
            $res['SensitiveTypeName'] = $this->sensitiveTypeName;
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
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }

        if (isset($map['MaskedContent'])) {
            $model->maskedContent = $map['MaskedContent'];
        }

        if (isset($map['SensitiveCategory'])) {
            $model->sensitiveCategory = $map['SensitiveCategory'];
        }

        if (isset($map['SensitiveContent'])) {
            $model->sensitiveContent = $map['SensitiveContent'];
        }

        if (isset($map['SensitiveTypeName'])) {
            $model->sensitiveTypeName = $map['SensitiveTypeName'];
        }

        return $model;
    }
}
