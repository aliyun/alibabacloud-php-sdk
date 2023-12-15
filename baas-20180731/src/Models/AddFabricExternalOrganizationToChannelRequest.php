<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class AddFabricExternalOrganizationToChannelRequest extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $joinRequest;

    /**
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'channelId'      => 'ChannelId',
        'description'    => 'Description',
        'joinRequest'    => 'JoinRequest',
        'organizationId' => 'OrganizationId',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->joinRequest) {
            $res['JoinRequest'] = $this->joinRequest;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFabricExternalOrganizationToChannelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['JoinRequest'])) {
            $model->joinRequest = $map['JoinRequest'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }

        return $model;
    }
}
