<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class PublishLiveStagingConfigToProductionRequest extends Model
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
     * @description The name of the feature. For more information about how to obtain the feature name, see [DescribeLiveDomainStagingConfig](https://help.aliyun.com/document_detail/297374.html).
     *
     * This parameter is required.
     *
     * @example aliauth
     *
     * @var string
     */
    public $functionName;

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
        'functionName' => 'FunctionName',
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
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
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
     * @return PublishLiveStagingConfigToProductionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
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
