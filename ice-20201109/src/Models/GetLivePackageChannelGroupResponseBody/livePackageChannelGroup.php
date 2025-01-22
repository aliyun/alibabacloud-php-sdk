<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetLivePackageChannelGroupResponseBody;

use AlibabaCloud\Dara\Model;

class livePackageChannelGroup extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var string
     */
    public $lastModified;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
