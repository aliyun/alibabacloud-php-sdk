<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetBrowserInstanceGroupResponseBody\browserInstanceGroupModel;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetBrowserInstanceGroupResponseBody\browserInstanceGroupModel\network\restrictedURLs;

class network extends Model
{
    /**
     * @var string
     */
    public $accessRestriction;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var restrictedURLs[]
     */
    public $restrictedURLs;

    /**
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'accessRestriction' => 'AccessRestriction',
        'officeSiteId' => 'OfficeSiteId',
        'restrictedURLs' => 'RestrictedURLs',
        'vSwitchIds' => 'VSwitchIds',
    ];

    public function validate()
    {
        if (\is_array($this->restrictedURLs)) {
            Model::validateArray($this->restrictedURLs);
        }
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessRestriction) {
            $res['AccessRestriction'] = $this->accessRestriction;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
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

        if (null !== $this->vSwitchIds) {
            if (\is_array($this->vSwitchIds)) {
                $res['VSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['VSwitchIds'][$n1] = $item1;
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

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
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

        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = [];
                $n1 = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
