<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\QueryLiveDomainMultiStreamListResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\QueryLiveDomainMultiStreamListResponseBody\onlineStreams\changeLogs;
use AlibabaCloud\SDK\Live\V20161101\Models\QueryLiveDomainMultiStreamListResponseBody\onlineStreams\upstreamList;
use AlibabaCloud\Tea\Model;

class onlineStreams extends Model
{
    /**
     * @description The name of the application.
     *
     * @example apptest
     *
     * @var string
     */
    public $appName;

    /**
     * @description The switchover records.
     *
     * @var changeLogs[]
     */
    public $changeLogs;

    /**
     * @description The main streaming domain.
     *
     * @example play.***.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description Indicates whether the dual-stream disaster recovery feature is enabled. Valid values:
     *
     *   **on**: enabled
     *   **off**: disabled
     *
     * @example on
     *
     * @var string
     */
    public $optimalMode;

    /**
     * @description The name of the live stream.
     *
     * @example teststream
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The standby streams.
     *
     * @var upstreamList[]
     */
    public $upstreamList;
    protected $_name = [
        'appName' => 'AppName',
        'changeLogs' => 'ChangeLogs',
        'domain' => 'Domain',
        'optimalMode' => 'OptimalMode',
        'streamName' => 'StreamName',
        'upstreamList' => 'UpstreamList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->changeLogs) {
            $res['ChangeLogs'] = [];
            if (null !== $this->changeLogs && \is_array($this->changeLogs)) {
                $n = 0;
                foreach ($this->changeLogs as $item) {
                    $res['ChangeLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->optimalMode) {
            $res['OptimalMode'] = $this->optimalMode;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->upstreamList) {
            $res['UpstreamList'] = [];
            if (null !== $this->upstreamList && \is_array($this->upstreamList)) {
                $n = 0;
                foreach ($this->upstreamList as $item) {
                    $res['UpstreamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return onlineStreams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ChangeLogs'])) {
            if (!empty($map['ChangeLogs'])) {
                $model->changeLogs = [];
                $n = 0;
                foreach ($map['ChangeLogs'] as $item) {
                    $model->changeLogs[$n++] = null !== $item ? changeLogs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['OptimalMode'])) {
            $model->optimalMode = $map['OptimalMode'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['UpstreamList'])) {
            if (!empty($map['UpstreamList'])) {
                $model->upstreamList = [];
                $n = 0;
                foreach ($map['UpstreamList'] as $item) {
                    $model->upstreamList[$n++] = null !== $item ? upstreamList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
