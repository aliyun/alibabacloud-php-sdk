<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\CreateApplicationInfoRequest;

use AlibabaCloud\Tea\Model;

class appingList extends Model
{
    /**
     * @var int
     */
    public $extId;

    /**
     * @description cdn ip
     *
     * @var string[]
     */
    public $flowIp;

    /**
     * @description cdn 域名信息
     *
     * @var string[]
     */
    public $flowUrl;

    /**
     * @description 业务方ip集合
     *
     * @var string[]
     */
    public $originalIpList;

    /**
     * @description 业务方域名集合
     *
     * @var string[]
     */
    public $originalUrlList;
    protected $_name = [
        'extId'           => 'ExtId',
        'flowIp'          => 'FlowIp',
        'flowUrl'         => 'FlowUrl',
        'originalIpList'  => 'OriginalIpList',
        'originalUrlList' => 'OriginalUrlList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extId) {
            $res['ExtId'] = $this->extId;
        }
        if (null !== $this->flowIp) {
            $res['FlowIp'] = $this->flowIp;
        }
        if (null !== $this->flowUrl) {
            $res['FlowUrl'] = $this->flowUrl;
        }
        if (null !== $this->originalIpList) {
            $res['OriginalIpList'] = $this->originalIpList;
        }
        if (null !== $this->originalUrlList) {
            $res['OriginalUrlList'] = $this->originalUrlList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appingList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtId'])) {
            $model->extId = $map['ExtId'];
        }
        if (isset($map['FlowIp'])) {
            if (!empty($map['FlowIp'])) {
                $model->flowIp = $map['FlowIp'];
            }
        }
        if (isset($map['FlowUrl'])) {
            if (!empty($map['FlowUrl'])) {
                $model->flowUrl = $map['FlowUrl'];
            }
        }
        if (isset($map['OriginalIpList'])) {
            if (!empty($map['OriginalIpList'])) {
                $model->originalIpList = $map['OriginalIpList'];
            }
        }
        if (isset($map['OriginalUrlList'])) {
            if (!empty($map['OriginalUrlList'])) {
                $model->originalUrlList = $map['OriginalUrlList'];
            }
        }

        return $model;
    }
}
