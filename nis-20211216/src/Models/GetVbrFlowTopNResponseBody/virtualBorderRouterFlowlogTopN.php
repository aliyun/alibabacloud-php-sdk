<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\GetVbrFlowTopNResponseBody;

use AlibabaCloud\Dara\Model;

class virtualBorderRouterFlowlogTopN extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $attachmentId;

    /**
     * @var float
     */
    public $bytes;

    /**
     * @var string
     */
    public $cloudIp;

    /**
     * @var string
     */
    public $cloudPort;

    /**
     * @var string
     */
    public $cloudRegion;

    /**
     * @var string
     */
    public $otherIp;

    /**
     * @var string
     */
    public $otherPort;

    /**
     * @var float
     */
    public $packets;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $virtualBorderRouterId;
    protected $_name = [
        'accountId' => 'AccountId',
        'attachmentId' => 'AttachmentId',
        'bytes' => 'Bytes',
        'cloudIp' => 'CloudIp',
        'cloudPort' => 'CloudPort',
        'cloudRegion' => 'CloudRegion',
        'otherIp' => 'OtherIp',
        'otherPort' => 'OtherPort',
        'packets' => 'Packets',
        'protocol' => 'Protocol',
        'virtualBorderRouterId' => 'VirtualBorderRouterId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->attachmentId) {
            $res['AttachmentId'] = $this->attachmentId;
        }

        if (null !== $this->bytes) {
            $res['Bytes'] = $this->bytes;
        }

        if (null !== $this->cloudIp) {
            $res['CloudIp'] = $this->cloudIp;
        }

        if (null !== $this->cloudPort) {
            $res['CloudPort'] = $this->cloudPort;
        }

        if (null !== $this->cloudRegion) {
            $res['CloudRegion'] = $this->cloudRegion;
        }

        if (null !== $this->otherIp) {
            $res['OtherIp'] = $this->otherIp;
        }

        if (null !== $this->otherPort) {
            $res['OtherPort'] = $this->otherPort;
        }

        if (null !== $this->packets) {
            $res['Packets'] = $this->packets;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->virtualBorderRouterId) {
            $res['VirtualBorderRouterId'] = $this->virtualBorderRouterId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['AttachmentId'])) {
            $model->attachmentId = $map['AttachmentId'];
        }

        if (isset($map['Bytes'])) {
            $model->bytes = $map['Bytes'];
        }

        if (isset($map['CloudIp'])) {
            $model->cloudIp = $map['CloudIp'];
        }

        if (isset($map['CloudPort'])) {
            $model->cloudPort = $map['CloudPort'];
        }

        if (isset($map['CloudRegion'])) {
            $model->cloudRegion = $map['CloudRegion'];
        }

        if (isset($map['OtherIp'])) {
            $model->otherIp = $map['OtherIp'];
        }

        if (isset($map['OtherPort'])) {
            $model->otherPort = $map['OtherPort'];
        }

        if (isset($map['Packets'])) {
            $model->packets = $map['Packets'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['VirtualBorderRouterId'])) {
            $model->virtualBorderRouterId = $map['VirtualBorderRouterId'];
        }

        return $model;
    }
}
