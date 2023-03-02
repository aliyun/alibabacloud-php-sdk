<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Tea\Model;

class CreateBusinessOpportunityRequest extends Model
{
    /**
     * @example esp.hightech
     *
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @example 18704330000
     *
     * @var string
     */
    public $mobile;

    /**
     * @var int
     */
    public $source;

    /**
     * @example 345674
     *
     * @var string
     */
    public $VCode;
    protected $_name = [
        'bizType'     => 'BizType',
        'contactName' => 'ContactName',
        'mobile'      => 'Mobile',
        'source'      => 'Source',
        'VCode'       => 'VCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->VCode) {
            $res['VCode'] = $this->VCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBusinessOpportunityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['VCode'])) {
            $model->VCode = $map['VCode'];
        }

        return $model;
    }
}
