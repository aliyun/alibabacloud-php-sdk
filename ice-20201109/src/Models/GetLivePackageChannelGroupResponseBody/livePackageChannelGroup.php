<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetLivePackageChannelGroupResponseBody;

use AlibabaCloud\Tea\Model;

class livePackageChannelGroup extends Model
{
    /**
     * @description The time when the channel group was created. It is in the yyyy-MM-ddTHH:mm:ssZ format and displayed in UTC.
     *
     * @example 2023-04-01T12:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The channel group description.
     *
     * @example Updated description of the channel group.
     *
     * @var string
     */
    public $description;

    /**
     * @description The channel group name.
     *
     * @example channel-group-1
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The time when the channel group was last modified. It is in the yyyy-MM-ddTHH:mm:ssZ format and displayed in UTC.
     *
     * @example 2023-04-01T12:00:00Z
     *
     * @var string
     */
    public $lastModified;

    /**
     * @description The origin domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $originDomain;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'description'  => 'Description',
        'groupName'    => 'GroupName',
        'lastModified' => 'LastModified',
        'originDomain' => 'OriginDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }
        if (null !== $this->originDomain) {
            $res['OriginDomain'] = $this->originDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return livePackageChannelGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }
        if (isset($map['OriginDomain'])) {
            $model->originDomain = $map['OriginDomain'];
        }

        return $model;
    }
}
