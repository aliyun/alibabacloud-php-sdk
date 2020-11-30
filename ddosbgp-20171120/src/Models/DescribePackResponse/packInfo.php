<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribePackResponse;

use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribePackResponse\packInfo\ipList;
use AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribePackResponse\packInfo\packConfig;
use AlibabaCloud\Tea\Model;

class packInfo extends Model
{
    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $availableDeleteBlackholeCount;

    /**
     * @var ipList[]
     */
    public $ipList;

    /**
     * @var packConfig
     */
    public $packConfig;
    protected $_name = [
        'region'                        => 'Region',
        'availableDeleteBlackholeCount' => 'AvailableDeleteBlackholeCount',
        'ipList'                        => 'IpList',
        'packConfig'                    => 'PackConfig',
    ];

    public function validate()
    {
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('availableDeleteBlackholeCount', $this->availableDeleteBlackholeCount, true);
        Model::validateRequired('ipList', $this->ipList, true);
        Model::validateRequired('packConfig', $this->packConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->availableDeleteBlackholeCount) {
            $res['AvailableDeleteBlackholeCount'] = $this->availableDeleteBlackholeCount;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = [];
            if (null !== $this->ipList && \is_array($this->ipList)) {
                $n = 0;
                foreach ($this->ipList as $item) {
                    $res['IpList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->packConfig) {
            $res['PackConfig'] = null !== $this->packConfig ? $this->packConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['AvailableDeleteBlackholeCount'])) {
            $model->availableDeleteBlackholeCount = $map['AvailableDeleteBlackholeCount'];
        }
        if (isset($map['IpList'])) {
            if (!empty($map['IpList'])) {
                $model->ipList = [];
                $n             = 0;
                foreach ($map['IpList'] as $item) {
                    $model->ipList[$n++] = null !== $item ? ipList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PackConfig'])) {
            $model->packConfig = packConfig::fromMap($map['PackConfig']);
        }

        return $model;
    }
}
