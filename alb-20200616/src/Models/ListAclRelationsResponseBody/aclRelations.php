<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListAclRelationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListAclRelationsResponseBody\aclRelations\relatedListeners;

class aclRelations extends Model
{
    /**
     * @var string
     */
    public $aclId;

    /**
     * @var relatedListeners[]
     */
    public $relatedListeners;
    protected $_name = [
        'aclId' => 'AclId',
        'relatedListeners' => 'RelatedListeners',
    ];

    public function validate()
    {
        if (\is_array($this->relatedListeners)) {
            Model::validateArray($this->relatedListeners);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }

        if (null !== $this->relatedListeners) {
            if (\is_array($this->relatedListeners)) {
                $res['RelatedListeners'] = [];
                $n1 = 0;
                foreach ($this->relatedListeners as $item1) {
                    $res['RelatedListeners'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }

        if (isset($map['RelatedListeners'])) {
            if (!empty($map['RelatedListeners'])) {
                $model->relatedListeners = [];
                $n1 = 0;
                foreach ($map['RelatedListeners'] as $item1) {
                    $model->relatedListeners[$n1] = relatedListeners::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
