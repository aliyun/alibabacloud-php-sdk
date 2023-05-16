<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody;

use AlibabaCloud\Tea\Model;

class commodityEntities extends Model
{
    /**
     * @var string[]
     */
    public $entityIds;

    /**
     * @var string
     */
    public $predefinedParameterName;

    /**
     * @example Custom_Image_Ecs
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'entityIds'               => 'EntityIds',
        'predefinedParameterName' => 'PredefinedParameterName',
        'templateName'            => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityIds) {
            $res['EntityIds'] = $this->entityIds;
        }
        if (null !== $this->predefinedParameterName) {
            $res['PredefinedParameterName'] = $this->predefinedParameterName;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commodityEntities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityIds'])) {
            if (!empty($map['EntityIds'])) {
                $model->entityIds = $map['EntityIds'];
            }
        }
        if (isset($map['PredefinedParameterName'])) {
            $model->predefinedParameterName = $map['PredefinedParameterName'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
