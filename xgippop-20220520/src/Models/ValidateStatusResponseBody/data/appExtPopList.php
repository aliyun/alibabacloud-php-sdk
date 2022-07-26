<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\ValidateStatusResponseBody\data;

use AlibabaCloud\Tea\Model;

class appExtPopList extends Model
{
    /**
     * @var int
     */
    public $extId;

    /**
     * @var string[]
     */
    public $flowIp;

    /**
     * @var string[]
     */
    public $flowUrl;

    /**
     * @var string[]
     */
    public $originalIpList;

    /**
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
     * @return appExtPopList
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
