<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class CreateUserAnalyzerRequest extends Model
{
    /**
     * @description The basic analyzer.
     *
     * @example chn_standard
     *
     * @var string
     */
    public $business;

    /**
     * @description The application ID of the custom analyzer.
     *
     * @example 110123123
     *
     * @var string
     */
    public $businessAppGroupId;

    /**
     * @description The basic analyzer type. Valid values: AUTO, MODEL, SYSTEM, and USER.
     *
     * @example AUTO
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The analyzer name.
     *
     * @example jmbon_analyzer
     *
     * @var string
     */
    public $name;

    /**
     * @description The engine type. Valid values: HA3 and ES.
     *
     * @example HA3
     *
     * @var string
     */
    public $type;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Default value: false.
     *
     * Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'business'           => 'business',
        'businessAppGroupId' => 'businessAppGroupId',
        'businessType'       => 'businessType',
        'name'               => 'name',
        'type'               => 'type',
        'dryRun'             => 'dryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->business) {
            $res['business'] = $this->business;
        }
        if (null !== $this->businessAppGroupId) {
            $res['businessAppGroupId'] = $this->businessAppGroupId;
        }
        if (null !== $this->businessType) {
            $res['businessType'] = $this->businessType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserAnalyzerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['business'])) {
            $model->business = $map['business'];
        }
        if (isset($map['businessAppGroupId'])) {
            $model->businessAppGroupId = $map['businessAppGroupId'];
        }
        if (isset($map['businessType'])) {
            $model->businessType = $map['businessType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
