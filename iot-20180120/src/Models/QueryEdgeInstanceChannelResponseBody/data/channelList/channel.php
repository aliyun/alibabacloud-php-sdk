<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceChannelResponseBody\data\channelList;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceChannelResponseBody\data\channelList\channel\configList;
use AlibabaCloud\Tea\Model;

class channel extends Model
{
    /**
     * @example BE0BD49EF5EF4D119D09CC1B25******
     *
     * @var string
     */
    public $channelId;

    /**
     * @example le_name0
     *
     * @var string
     */
    public $channelName;

    /**
     * @var configList
     */
    public $configList;

    /**
     * @example 2020-03-16 23:06:52
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 1584371212000
     *
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @example 2020-03-16 23:06:52
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 1584371212000
     *
     * @var int
     */
    public $gmtModifiedTimestamp;
    protected $_name = [
        'channelId'            => 'ChannelId',
        'channelName'          => 'ChannelName',
        'configList'           => 'ConfigList',
        'gmtCreate'            => 'GmtCreate',
        'gmtCreateTimestamp'   => 'GmtCreateTimestamp',
        'gmtModified'          => 'GmtModified',
        'gmtModifiedTimestamp' => 'GmtModifiedTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->configList) {
            $res['ConfigList'] = null !== $this->configList ? $this->configList->toMap() : null;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtModifiedTimestamp) {
            $res['GmtModifiedTimestamp'] = $this->gmtModifiedTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['ConfigList'])) {
            $model->configList = configList::fromMap($map['ConfigList']);
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GmtModifiedTimestamp'])) {
            $model->gmtModifiedTimestamp = $map['GmtModifiedTimestamp'];
        }

        return $model;
    }
}
