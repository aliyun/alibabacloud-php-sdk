<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitivityLevelResponseBody;

use AlibabaCloud\Tea\Model;

class sensitivityLevelList extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $isPlain;

    /**
     * @example S2
     *
     * @var string
     */
    public $name;

    /**
     * @example 1070
     *
     * @var string
     */
    public $templateId;

    /**
     * @example INNER
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'isPlain'      => 'IsPlain',
        'name'         => 'Name',
        'templateId'   => 'TemplateId',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isPlain) {
            $res['IsPlain'] = $this->isPlain;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sensitivityLevelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsPlain'])) {
            $model->isPlain = $map['IsPlain'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
