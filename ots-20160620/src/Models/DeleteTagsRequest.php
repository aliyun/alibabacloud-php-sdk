<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ots\V20160620\Models;

use AlibabaCloud\SDK\Ots\V20160620\Models\DeleteTagsRequest\tagInfo;
use AlibabaCloud\Tea\Model;

class DeleteTagsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var tagInfo[]
     */
    public $tagInfo;
    protected $_name = [
        'instanceName'    => 'InstanceName',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tagInfo'         => 'TagInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->tagInfo) {
            $res['TagInfo'] = [];
            if (null !== $this->tagInfo && \is_array($this->tagInfo)) {
                $n = 0;
                foreach ($this->tagInfo as $item) {
                    $res['TagInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TagInfo'])) {
            if (!empty($map['TagInfo'])) {
                $model->tagInfo = [];
                $n              = 0;
                foreach ($map['TagInfo'] as $item) {
                    $model->tagInfo[$n++] = null !== $item ? tagInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
