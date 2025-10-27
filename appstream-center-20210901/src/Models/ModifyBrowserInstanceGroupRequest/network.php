<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest\network\restrictedURLs;

class network extends Model
{
    /**
     * @var string
     */
    public $accessRestriction;

    /**
     * @var string[]
     */
    public $removeRestrictedURLIds;

    /**
     * @var restrictedURLs[]
     */
    public $restrictedURLs;
    protected $_name = [
        'accessRestriction' => 'AccessRestriction',
        'removeRestrictedURLIds' => 'RemoveRestrictedURLIds',
        'restrictedURLs' => 'RestrictedURLs',
    ];

    public function validate()
    {
        if (\is_array($this->removeRestrictedURLIds)) {
            Model::validateArray($this->removeRestrictedURLIds);
        }
        if (\is_array($this->restrictedURLs)) {
            Model::validateArray($this->restrictedURLs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessRestriction) {
            $res['AccessRestriction'] = $this->accessRestriction;
        }

        if (null !== $this->removeRestrictedURLIds) {
            if (\is_array($this->removeRestrictedURLIds)) {
                $res['RemoveRestrictedURLIds'] = [];
                $n1 = 0;
                foreach ($this->removeRestrictedURLIds as $item1) {
                    $res['RemoveRestrictedURLIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->restrictedURLs) {
            if (\is_array($this->restrictedURLs)) {
                $res['RestrictedURLs'] = [];
                $n1 = 0;
                foreach ($this->restrictedURLs as $item1) {
                    $res['RestrictedURLs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccessRestriction'])) {
            $model->accessRestriction = $map['AccessRestriction'];
        }

        if (isset($map['RemoveRestrictedURLIds'])) {
            if (!empty($map['RemoveRestrictedURLIds'])) {
                $model->removeRestrictedURLIds = [];
                $n1 = 0;
                foreach ($map['RemoveRestrictedURLIds'] as $item1) {
                    $model->removeRestrictedURLIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RestrictedURLs'])) {
            if (!empty($map['RestrictedURLs'])) {
                $model->restrictedURLs = [];
                $n1 = 0;
                foreach ($map['RestrictedURLs'] as $item1) {
                    $model->restrictedURLs[$n1] = restrictedURLs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
