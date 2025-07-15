<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetLiveDomainStagingConfigRequest extends Model
{
    /**
     * @description The accelerated domain name.
     *
     * This parameter is required.
     *
     * @example developer.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The list of features. You must specify the ConfigId field when you want to modify the configurations. For more information, see **Features specified by the Functions parameter**.
     *
     * This parameter is required.
     *
     * @example [{"functionArgs":[{"argName":"enable","argValue":"on"},{"argName":"pri","argValue":"1"},{"argName":"rule","argValue":"xxx"}],"functionName":"edge_function"}]
     *
     * @var string
     */
    public $functions;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'domainName' => 'DomainName',
        'functions' => 'Functions',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->functions) {
            $res['Functions'] = $this->functions;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetLiveDomainStagingConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Functions'])) {
            $model->functions = $map['Functions'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
