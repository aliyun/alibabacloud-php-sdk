<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListAclRelationsResponseBody;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListAclRelationsResponseBody\aclRelations\relatedListeners;
use AlibabaCloud\Tea\Model;

class aclRelations extends Model
{
    /**
     * @description ACL ID
     *
     * @example nacl-hp34s2h0xx1ht4nwo****
     *
     * @var string
     */
    public $aclId;

    /**
     * @description The listeners that are associated with the ACL.
     *
     * @var relatedListeners[]
     */
    public $relatedListeners;
    protected $_name = [
        'aclId'            => 'AclId',
        'relatedListeners' => 'RelatedListeners',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->relatedListeners) {
            $res['RelatedListeners'] = [];
            if (null !== $this->relatedListeners && \is_array($this->relatedListeners)) {
                $n = 0;
                foreach ($this->relatedListeners as $item) {
                    $res['RelatedListeners'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclRelations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['RelatedListeners'])) {
            if (!empty($map['RelatedListeners'])) {
                $model->relatedListeners = [];
                $n                       = 0;
                foreach ($map['RelatedListeners'] as $item) {
                    $model->relatedListeners[$n++] = null !== $item ? relatedListeners::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
