<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\DisassociateResourceShareResponseBody\resourceShareAssociations;
use AlibabaCloud\Tea\Model;

class DisassociateResourceShareResponseBody extends Model
{
    /**
     * @description The time when the disassociation of the entity was updated. The value of this parameter depends on the value of the AssociationType parameter:
     *
     *   If the value of `AssociationType` is `Resource`, the value of this parameter is the time when the disassociation of the resource was updated.
     *   If the value of `AssociationType` is `Target`, the value of this parameter is the time when the disassociation of the principal was updated.
     *
     * @example 95230BC9-A8E8-4493-96BD-4F0C758E37F8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the entity. The value of this parameter depends on the value of the AssociationType parameter:
     *
     *   If the value of `AssociationType` is `Resource`, the value of this parameter is the ID of the resource.
     *   If the value of `AssociationType` is `Target`, the value of this parameter is the ID of the resource directory, folder, or member.
     *
     * @var resourceShareAssociations[]
     */
    public $resourceShareAssociations;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'resourceShareAssociations' => 'ResourceShareAssociations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceShareAssociations) {
            $res['ResourceShareAssociations'] = [];
            if (null !== $this->resourceShareAssociations && \is_array($this->resourceShareAssociations)) {
                $n = 0;
                foreach ($this->resourceShareAssociations as $item) {
                    $res['ResourceShareAssociations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisassociateResourceShareResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceShareAssociations'])) {
            if (!empty($map['ResourceShareAssociations'])) {
                $model->resourceShareAssociations = [];
                $n                                = 0;
                foreach ($map['ResourceShareAssociations'] as $item) {
                    $model->resourceShareAssociations[$n++] = null !== $item ? resourceShareAssociations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
