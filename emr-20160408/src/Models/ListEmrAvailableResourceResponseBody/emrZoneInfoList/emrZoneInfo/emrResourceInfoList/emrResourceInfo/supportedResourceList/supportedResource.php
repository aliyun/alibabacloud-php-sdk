<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList\emrZoneInfo\emrResourceInfoList\emrResourceInfo\supportedResourceList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList\emrZoneInfo\emrResourceInfoList\emrResourceInfo\supportedResourceList\supportedResource\emrInstanceType;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableResourceResponseBody\emrZoneInfoList\emrZoneInfo\emrResourceInfoList\emrResourceInfo\supportedResourceList\supportedResource\supportNodeTypeList;
use AlibabaCloud\Tea\Model;

class supportedResource extends Model
{
    /**
     * @var emrInstanceType
     */
    public $emrInstanceType;

    /**
     * @var int
     */
    public $max;

    /**
     * @var int
     */
    public $min;

    /**
     * @var supportNodeTypeList
     */
    public $supportNodeTypeList;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'emrInstanceType'     => 'EmrInstanceType',
        'max'                 => 'Max',
        'min'                 => 'Min',
        'supportNodeTypeList' => 'SupportNodeTypeList',
        'unit'                => 'Unit',
        'value'               => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emrInstanceType) {
            $res['EmrInstanceType'] = null !== $this->emrInstanceType ? $this->emrInstanceType->toMap() : null;
        }
        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }
        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }
        if (null !== $this->supportNodeTypeList) {
            $res['SupportNodeTypeList'] = null !== $this->supportNodeTypeList ? $this->supportNodeTypeList->toMap() : null;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['EmrInstanceType'])) {
            $model->emrInstanceType = emrInstanceType::fromMap($map['EmrInstanceType']);
        }
        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }
        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }
        if (isset($map['SupportNodeTypeList'])) {
            $model->supportNodeTypeList = supportNodeTypeList::fromMap($map['SupportNodeTypeList']);
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
