<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\tags;

class CreateCustomCertificateRequest extends Model
{
    /**
     * @var apiPassthrough
     */
    public $apiPassthrough;

    /**
     * @var string
     */
    public $csr;

    /**
     * @var int
     */
    public $enableCrl;

    /**
     * @var int
     */
    public $immediately;

    /**
     * @var string
     */
    public $parentIdentifier;

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

    /**
     * @var string
     */
    public $customIdentifier;
    protected $_name = [
        'apiPassthrough' => 'ApiPassthrough',
        'csr' => 'Csr',
        'enableCrl' => 'EnableCrl',
        'immediately' => 'Immediately',
        'parentIdentifier' => 'ParentIdentifier',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
        'validity' => 'Validity',
        'customIdentifier' => 'customIdentifier',
    ];

    public function validate()
    {
        if (null !== $this->apiPassthrough) {
            $this->apiPassthrough->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiPassthrough) {
            $res['ApiPassthrough'] = null !== $this->apiPassthrough ? $this->apiPassthrough->toArray($noStream) : $this->apiPassthrough;
        }

        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
        }

        if (null !== $this->enableCrl) {
            $res['EnableCrl'] = $this->enableCrl;
        }

        if (null !== $this->immediately) {
            $res['Immediately'] = $this->immediately;
        }

        if (null !== $this->parentIdentifier) {
            $res['ParentIdentifier'] = $this->parentIdentifier;
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

        if (null !== $this->customIdentifier) {
            $res['customIdentifier'] = $this->customIdentifier;
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
            $model->apiPassthrough = apiPassthrough::fromMap($map['ApiPassthrough']);
        }

        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }

        if (isset($map['EnableCrl'])) {
            $model->enableCrl = $map['EnableCrl'];
        }

        if (isset($map['Immediately'])) {
            $model->immediately = $map['Immediately'];
        }

        if (isset($map['ParentIdentifier'])) {
            $model->parentIdentifier = $map['ParentIdentifier'];
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

        if (isset($map['customIdentifier'])) {
            $model->customIdentifier = $map['customIdentifier'];
        }

        return $model;
    }
}
