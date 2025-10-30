<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateExternalCACertificateShrinkRequest\tags;

class CreateExternalCACertificateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $apiPassthroughShrink;

    /**
     * @var string
     */
    public $csr;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $validity;
    protected $_name = [
        'apiPassthroughShrink' => 'ApiPassthrough',
        'csr' => 'Csr',
        'instanceId' => 'InstanceId',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
        'validity' => 'Validity',
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
        if (null !== $this->apiPassthroughShrink) {
            $res['ApiPassthrough'] = $this->apiPassthroughShrink;
        }

        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->validity) {
            $res['Validity'] = $this->validity;
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
        if (isset($map['ApiPassthrough'])) {
            $model->apiPassthroughShrink = $map['ApiPassthrough'];
        }

        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Validity'])) {
            $model->validity = $map['Validity'];
        }

        return $model;
    }
}
