<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20260603\Models\GetModelDeploymentResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAIModelGallery\V20260603\Models\GetModelDeploymentResourcesResponseBody\memberMatches\dedicatedResources;
use AlibabaCloud\SDK\PAIModelGallery\V20260603\Models\GetModelDeploymentResourcesResponseBody\memberMatches\publicResources;
use AlibabaCloud\SDK\PAIModelGallery\V20260603\Models\GetModelDeploymentResourcesResponseBody\memberMatches\quotas;

class memberMatches extends Model
{
    /**
     * @var dedicatedResources[]
     */
    public $dedicatedResources;

    /**
     * @var string
     */
    public $memberType;

    /**
     * @var publicResources[]
     */
    public $publicResources;

    /**
     * @var quotas[]
     */
    public $quotas;
    protected $_name = [
        'dedicatedResources' => 'DedicatedResources',
        'memberType' => 'MemberType',
        'publicResources' => 'PublicResources',
        'quotas' => 'Quotas',
    ];

    public function validate()
    {
        if (\is_array($this->dedicatedResources)) {
            Model::validateArray($this->dedicatedResources);
        }
        if (\is_array($this->publicResources)) {
            Model::validateArray($this->publicResources);
        }
        if (\is_array($this->quotas)) {
            Model::validateArray($this->quotas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedResources) {
            if (\is_array($this->dedicatedResources)) {
                $res['DedicatedResources'] = [];
                $n1 = 0;
                foreach ($this->dedicatedResources as $item1) {
                    $res['DedicatedResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->memberType) {
            $res['MemberType'] = $this->memberType;
        }

        if (null !== $this->publicResources) {
            if (\is_array($this->publicResources)) {
                $res['PublicResources'] = [];
                $n1 = 0;
                foreach ($this->publicResources as $item1) {
                    $res['PublicResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->quotas) {
            if (\is_array($this->quotas)) {
                $res['Quotas'] = [];
                $n1 = 0;
                foreach ($this->quotas as $item1) {
                    $res['Quotas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DedicatedResources'])) {
            if (!empty($map['DedicatedResources'])) {
                $model->dedicatedResources = [];
                $n1 = 0;
                foreach ($map['DedicatedResources'] as $item1) {
                    $model->dedicatedResources[$n1] = dedicatedResources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MemberType'])) {
            $model->memberType = $map['MemberType'];
        }

        if (isset($map['PublicResources'])) {
            if (!empty($map['PublicResources'])) {
                $model->publicResources = [];
                $n1 = 0;
                foreach ($map['PublicResources'] as $item1) {
                    $model->publicResources[$n1] = publicResources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Quotas'])) {
            if (!empty($map['Quotas'])) {
                $model->quotas = [];
                $n1 = 0;
                foreach ($map['Quotas'] as $item1) {
                    $model->quotas[$n1] = quotas::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
