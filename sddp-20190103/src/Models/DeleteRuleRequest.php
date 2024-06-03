<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DeleteRuleRequest extends Model
{
    /**
     * @description This parameter is deprecated.
     *
     * @example 1
     *
     * @var int
     */
    public $featureType;

    /**
     * @description The ID of the sensitive data detection rule.
     *
     * This parameter is required.
     * @example 122300
     *
     * @var int
     */
    public $id;

    /**
     * @description The language of the content within the request and response. Valid values: **zh** and **en**. The value zh indicates Chinese, and the value en indicates English.
     *
     * @example zh
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
        'id'          => 'Id',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
     * @return DeleteRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
