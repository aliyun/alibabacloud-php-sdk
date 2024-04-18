<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class CreateSlrRoleRequest extends Model
{
    /**
     * @description This parameter is deprecated.
     *
     * @example 2
     *
     * @var int
     */
    public $featureType;

    /**
     * @description The language of the content within the request and response. Default value: **zh_cn**. Valid values:
     *
     *   **zh_cn**: Simplified Chinese
     *   **en_us**: English
     *
     * @example zh_cn
     *
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is deprecated.
     *
     * @example 39.170.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'featureType' => 'FeatureType',
        'lang'        => 'Lang',
        'sourceIp'    => 'SourceIp',
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
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSlrRoleRequest
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
