<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribePackListResponse;

use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribePackListResponse\packList\packConfig;
use AlibabaCloud\Tea\Model;

class packList extends Model
{
    /**
     * @var int
     */
    public $availableDeleteBlackholeCount;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $packId;

    /**
     * @var packConfig
     */
    public $packConfig;
    protected $_name = [
        'availableDeleteBlackholeCount' => 'AvailableDeleteBlackholeCount',
        'region'                        => 'Region',
        'packId'                        => 'PackId',
        'packConfig'                    => 'PackConfig',
    ];

    public function validate()
    {
        Model::validateRequired('availableDeleteBlackholeCount', $this->availableDeleteBlackholeCount, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('packId', $this->packId, true);
        Model::validateRequired('packConfig', $this->packConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableDeleteBlackholeCount) {
            $res['AvailableDeleteBlackholeCount'] = $this->availableDeleteBlackholeCount;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->packId) {
            $res['PackId'] = $this->packId;
        }
        if (null !== $this->packConfig) {
            $res['PackConfig'] = null !== $this->packConfig ? $this->packConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableDeleteBlackholeCount'])) {
            $model->availableDeleteBlackholeCount = $map['AvailableDeleteBlackholeCount'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['PackId'])) {
            $model->packId = $map['PackId'];
        }
        if (isset($map['PackConfig'])) {
            $model->packConfig = packConfig::fromMap($map['PackConfig']);
        }

        return $model;
    }
}
