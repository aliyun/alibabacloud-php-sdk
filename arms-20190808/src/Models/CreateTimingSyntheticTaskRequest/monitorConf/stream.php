<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\monitorConf;

use AlibabaCloud\Tea\Model;

class stream extends Model
{
    /**
     * @var string[]
     */
    public $customHeaderContent;

    /**
     * @var int
     */
    public $playerType;

    /**
     * @var int
     */
    public $streamAddressType;

    /**
     * @var int
     */
    public $streamMonitorTimeout;

    /**
     * @var int
     */
    public $streamType;

    /**
     * @var string
     */
    public $targetUrl;

    /**
     * @var string
     */
    public $whiteList;
    protected $_name = [
        'customHeaderContent'  => 'CustomHeaderContent',
        'playerType'           => 'PlayerType',
        'streamAddressType'    => 'StreamAddressType',
        'streamMonitorTimeout' => 'StreamMonitorTimeout',
        'streamType'           => 'StreamType',
        'targetUrl'            => 'TargetUrl',
        'whiteList'            => 'WhiteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customHeaderContent) {
            $res['CustomHeaderContent'] = $this->customHeaderContent;
        }
        if (null !== $this->playerType) {
            $res['PlayerType'] = $this->playerType;
        }
        if (null !== $this->streamAddressType) {
            $res['StreamAddressType'] = $this->streamAddressType;
        }
        if (null !== $this->streamMonitorTimeout) {
            $res['StreamMonitorTimeout'] = $this->streamMonitorTimeout;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }
        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stream
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomHeaderContent'])) {
            $model->customHeaderContent = $map['CustomHeaderContent'];
        }
        if (isset($map['PlayerType'])) {
            $model->playerType = $map['PlayerType'];
        }
        if (isset($map['StreamAddressType'])) {
            $model->streamAddressType = $map['StreamAddressType'];
        }
        if (isset($map['StreamMonitorTimeout'])) {
            $model->streamMonitorTimeout = $map['StreamMonitorTimeout'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }
        if (isset($map['WhiteList'])) {
            $model->whiteList = $map['WhiteList'];
        }

        return $model;
    }
}
