<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class ModifyEventTypeStatusRequest extends Model
{
    /**
     * @var int
     */
    public $featureType;

    /**
     * @description The language of the content within the request and response. Valid values: **zh** and **en**. The value zh indicates Chinese, and the value en indicates English.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the anomalous event subtype. Separate multiple IDs with commas (,).
     *
     * > You can call the **DescribeEventTypes** operation to query the ID of anomalous event subtype.
     * @example 020008
     *
     * @var string
     */
    public $subTypeIds;
    protected $_name = [
        'featureType' => 'FeatureType',
        'lang'        => 'Lang',
        'subTypeIds'  => 'SubTypeIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureType) {
            $res['FeatureType'] = $this->featureType;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->subTypeIds) {
            $res['SubTypeIds'] = $this->subTypeIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyEventTypeStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SubTypeIds'])) {
            $model->subTypeIds = $map['SubTypeIds'];
        }

        return $model;
    }
}
