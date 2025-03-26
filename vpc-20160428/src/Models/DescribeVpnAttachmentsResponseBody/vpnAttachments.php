<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnAttachmentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnAttachmentsResponseBody\vpnAttachments\tags;

class vpnAttachments extends Model
{
    /**
     * @var string
     */
    public $attachType;

    /**
     * @var bool
     */
    public $crossAccountAuthorized;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $transitRouterId;

    /**
     * @var string
     */
    public $transitRouterName;
    protected $_name = [
        'attachType' => 'AttachType',
        'crossAccountAuthorized' => 'CrossAccountAuthorized',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'tag' => 'Tag',
        'tags' => 'Tags',
        'transitRouterId' => 'TransitRouterId',
        'transitRouterName' => 'TransitRouterName',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachType) {
            $res['AttachType'] = $this->attachType;
        }

        if (null !== $this->crossAccountAuthorized) {
            $res['CrossAccountAuthorized'] = $this->crossAccountAuthorized;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        if (null !== $this->transitRouterName) {
            $res['TransitRouterName'] = $this->transitRouterName;
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
        if (isset($map['AttachType'])) {
            $model->attachType = $map['AttachType'];
        }

        if (isset($map['CrossAccountAuthorized'])) {
            $model->crossAccountAuthorized = $map['CrossAccountAuthorized'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        if (isset($map['TransitRouterName'])) {
            $model->transitRouterName = $map['TransitRouterName'];
        }

        return $model;
    }
}
