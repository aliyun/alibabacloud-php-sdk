<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifySecurityGroupAttributeRequest\authorizeEgress;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifySecurityGroupAttributeRequest\authorizeIngress;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifySecurityGroupAttributeRequest\revokeEgress;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifySecurityGroupAttributeRequest\revokeIngress;

class ModifySecurityGroupAttributeRequest extends Model
{
    /**
     * @var authorizeEgress[]
     */
    public $authorizeEgress;

    /**
     * @var authorizeIngress[]
     */
    public $authorizeIngress;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var revokeEgress[]
     */
    public $revokeEgress;

    /**
     * @var revokeIngress[]
     */
    public $revokeIngress;
    protected $_name = [
        'authorizeEgress' => 'AuthorizeEgress',
        'authorizeIngress' => 'AuthorizeIngress',
        'officeSiteId' => 'OfficeSiteId',
        'regionId' => 'RegionId',
        'revokeEgress' => 'RevokeEgress',
        'revokeIngress' => 'RevokeIngress',
    ];

    public function validate()
    {
        if (\is_array($this->authorizeEgress)) {
            Model::validateArray($this->authorizeEgress);
        }
        if (\is_array($this->authorizeIngress)) {
            Model::validateArray($this->authorizeIngress);
        }
        if (\is_array($this->revokeEgress)) {
            Model::validateArray($this->revokeEgress);
        }
        if (\is_array($this->revokeIngress)) {
            Model::validateArray($this->revokeIngress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizeEgress) {
            if (\is_array($this->authorizeEgress)) {
                $res['AuthorizeEgress'] = [];
                $n1 = 0;
                foreach ($this->authorizeEgress as $item1) {
                    $res['AuthorizeEgress'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->authorizeIngress) {
            if (\is_array($this->authorizeIngress)) {
                $res['AuthorizeIngress'] = [];
                $n1 = 0;
                foreach ($this->authorizeIngress as $item1) {
                    $res['AuthorizeIngress'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->revokeEgress) {
            if (\is_array($this->revokeEgress)) {
                $res['RevokeEgress'] = [];
                $n1 = 0;
                foreach ($this->revokeEgress as $item1) {
                    $res['RevokeEgress'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->revokeIngress) {
            if (\is_array($this->revokeIngress)) {
                $res['RevokeIngress'] = [];
                $n1 = 0;
                foreach ($this->revokeIngress as $item1) {
                    $res['RevokeIngress'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AuthorizeEgress'])) {
            if (!empty($map['AuthorizeEgress'])) {
                $model->authorizeEgress = [];
                $n1 = 0;
                foreach ($map['AuthorizeEgress'] as $item1) {
                    $model->authorizeEgress[$n1] = authorizeEgress::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AuthorizeIngress'])) {
            if (!empty($map['AuthorizeIngress'])) {
                $model->authorizeIngress = [];
                $n1 = 0;
                foreach ($map['AuthorizeIngress'] as $item1) {
                    $model->authorizeIngress[$n1] = authorizeIngress::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RevokeEgress'])) {
            if (!empty($map['RevokeEgress'])) {
                $model->revokeEgress = [];
                $n1 = 0;
                foreach ($map['RevokeEgress'] as $item1) {
                    $model->revokeEgress[$n1] = revokeEgress::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RevokeIngress'])) {
            if (!empty($map['RevokeIngress'])) {
                $model->revokeIngress = [];
                $n1 = 0;
                foreach ($map['RevokeIngress'] as $item1) {
                    $model->revokeIngress[$n1] = revokeIngress::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
