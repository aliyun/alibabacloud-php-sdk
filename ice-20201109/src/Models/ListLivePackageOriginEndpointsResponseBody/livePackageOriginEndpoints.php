<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLivePackageOriginEndpointsResponseBody;

use AlibabaCloud\Tea\Model;

class livePackageOriginEndpoints extends Model
{
    /**
     * @description The authorization code.
     *
     * @example Abc123Def456
     *
     * @var string
     */
    public $authorizationCode;

    /**
     * @description The channel name.
     *
     * @example channel-1
     *
     * @var string
     */
    public $channelName;

    /**
     * @description The time when the endpoint was created.
     *
     * @example 2023-04-01T12:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The endpoint description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The endpoint name.
     *
     * @example endpoint-1
     *
     * @var string
     */
    public $endpointName;

    /**
     * @description The endpoint URL.
     *
     * @example https://xxx.packagepull-abcxxx.ap-southeast-1.aliyuncsiceintl.com/v1/group01/1/ch01/manifest.m3u8
     *
     * @var string
     */
    public $endpointUrl;

    /**
     * @description The channel group name.
     *
     * @example channel-group-1
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The IP address blacklist.
     *
     * @example 10.21.222.1/32,192.168.100.0/24
     *
     * @var string
     */
    public $ipBlacklist;

    /**
     * @description The IP address whitelist.
     *
     * @example 192.168.1.0/24,10.0.0.1/24
     *
     * @var string
     */
    public $ipWhitelist;

    /**
     * @description The time when the endpoint was last modified.
     *
     * @example 2023-04-01T12:00:00Z
     *
     * @var string
     */
    public $lastModified;

    /**
     * @description The playlist name.
     *
     * @example manifest
     *
     * @var string
     */
    public $manifestName;

    /**
     * @description The distribution protocol.
     *
     * @example HLS
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The number of days that time-shifted content is available.
     *
     * @example 1
     *
     * @var int
     */
    public $timeshiftVision;
    protected $_name = [
        'authorizationCode' => 'AuthorizationCode',
        'channelName'       => 'ChannelName',
        'createTime'        => 'CreateTime',
        'description'       => 'Description',
        'endpointName'      => 'EndpointName',
        'endpointUrl'       => 'EndpointUrl',
        'groupName'         => 'GroupName',
        'ipBlacklist'       => 'IpBlacklist',
        'ipWhitelist'       => 'IpWhitelist',
        'lastModified'      => 'LastModified',
        'manifestName'      => 'ManifestName',
        'protocol'          => 'Protocol',
        'timeshiftVision'   => 'TimeshiftVision',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationCode) {
            $res['AuthorizationCode'] = $this->authorizationCode;
        }
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
        }
        if (null !== $this->endpointUrl) {
            $res['EndpointUrl'] = $this->endpointUrl;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->ipBlacklist) {
            $res['IpBlacklist'] = $this->ipBlacklist;
        }
        if (null !== $this->ipWhitelist) {
            $res['IpWhitelist'] = $this->ipWhitelist;
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }
        if (null !== $this->manifestName) {
            $res['ManifestName'] = $this->manifestName;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->timeshiftVision) {
            $res['TimeshiftVision'] = $this->timeshiftVision;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return livePackageOriginEndpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationCode'])) {
            $model->authorizationCode = $map['AuthorizationCode'];
        }
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
        }
        if (isset($map['EndpointUrl'])) {
            $model->endpointUrl = $map['EndpointUrl'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IpBlacklist'])) {
            $model->ipBlacklist = $map['IpBlacklist'];
        }
        if (isset($map['IpWhitelist'])) {
            $model->ipWhitelist = $map['IpWhitelist'];
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }
        if (isset($map['ManifestName'])) {
            $model->manifestName = $map['ManifestName'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['TimeshiftVision'])) {
            $model->timeshiftVision = $map['TimeshiftVision'];
        }

        return $model;
    }
}
