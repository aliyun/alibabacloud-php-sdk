<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateLivePackageOriginEndpointRequest extends Model
{
    /**
     * @description The authorization code. It can be up to 200 characters in length. You must configure AuthorizationCode, IpWhitelist, or both. Format: [A-Za-z0-9-_.]+
     *
     * @example AbcDef123
     *
     * @var string
     */
    public $authorizationCode;

    /**
     * @description The channel name.
     *
     * This parameter is required.
     *
     * @example channel-1
     *
     * @var string
     */
    public $channelName;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example ****0311a423d11a5f7dee713535****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The endpoint description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The origin endpoint name. It can contain letters, digits, hyphens (-), and underscores (_). The name must be 1 to 200 characters in length. Format: [A-Za-z0-9_-]+
     *
     * This parameter is required.
     *
     * @example endpoint-1
     *
     * @var string
     */
    public $endpointName;

    /**
     * @description The channel group name.
     *
     * This parameter is required.
     *
     * @example channel-group-1
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The IP address blacklist. It supports subnet masks. 0.0.0.0/0 is not allowed. It can be up to 1,000 characters in length. Separate multiple IP addresses with commas (,).
     *
     * @example 103.21.222.1/32,192.168.100.0/24
     *
     * @var string
     */
    public $ipBlacklist;

    /**
     * @description The IP address whitelist. It supports subnet masks. 0.0.0.0/0 is not allowed. It can be up to 1,000 characters in length. Separate multiple IP addresses with commas (,). You must configure AuthorizationCode, IpWhitelist, or both.
     *
     * @example 192.168.1.0/24,10.0.0.1/24
     *
     * @var string
     */
    public $ipWhitelist;

    /**
     * @description The playlist name. Default value: manifest.
     *
     * @example manifest
     *
     * @var string
     */
    public $manifestName;

    /**
     * @description The distribution protocol.
     *
     * This parameter is required.
     *
     * @example HLS
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The number of days that time-shifted content is available. Maximum value: 30. Default value: 0, which indicates that time shifting is not supported.
     *
     * @example 1
     *
     * @var int
     */
    public $timeshiftVision;
    protected $_name = [
        'authorizationCode' => 'AuthorizationCode',
        'channelName' => 'ChannelName',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'endpointName' => 'EndpointName',
        'groupName' => 'GroupName',
        'ipBlacklist' => 'IpBlacklist',
        'ipWhitelist' => 'IpWhitelist',
        'manifestName' => 'ManifestName',
        'protocol' => 'Protocol',
        'timeshiftVision' => 'TimeshiftVision',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationCode) {
            $res['AuthorizationCode'] = $this->authorizationCode;
        }
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
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
     * @return CreateLivePackageOriginEndpointRequest
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
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
