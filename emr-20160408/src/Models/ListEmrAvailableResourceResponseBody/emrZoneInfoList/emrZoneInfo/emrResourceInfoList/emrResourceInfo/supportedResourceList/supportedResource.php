<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList\emrZoneInfo\emrResourceInfoList\emrResourceInfo\supportedResourceList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList\emrZoneInfo\emrResourceInfoList\emrResourceInfo\supportedResourceList\supportedResource\emrInstanceType;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList\emrZoneInfo\emrResourceInfoList\emrResourceInfo\supportedResourceList\supportedResource\supportNodeTypeList;
use AlibabaCloud\Tea\Model;

class supportedResource extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var int
     */
    public $max;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var emrInstanceType
     */
    public $emrInstanceType;

    /**
     * @var int
     */
    public $min;

    /**
     * @var supportNodeTypeList
     */
    public $supportNodeTypeList;
    protected $_name = [
        'value'               => 'Value',
        'max'                 => 'Max',
        'unit'                => 'Unit',
        'emrInstanceType'     => 'EmrInstanceType',
        'min'                 => 'Min',
        'supportNodeTypeList' => 'SupportNodeTypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->emrInstanceType) {
            $res['EmrInstanceType'] = null !== $this->emrInstanceType ? $this->emrInstanceType->toMap() : null;
        }
        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }
        if (null !== $this->supportNodeTypeList) {
            $res['SupportNodeTypeList'] = null !== $this->supportNodeTypeList ? $this->supportNodeTypeList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['EmrInstanceType'])) {
            $model->emrInstanceType = emrInstanceType::fromMap($map['EmrInstanceType']);
        }
        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }
        if (isset($map['SupportNodeTypeList'])) {
            $model->supportNodeTypeList = supportNodeTypeList::fromMap($map['SupportNodeTypeList']);
        }

        return $model;
    }
}
