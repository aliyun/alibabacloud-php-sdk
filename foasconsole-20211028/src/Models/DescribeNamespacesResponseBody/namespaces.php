<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeNamespacesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeNamespacesResponseBody\namespaces\elasticResourceSpec;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeNamespacesResponseBody\namespaces\guaranteedResourceSpec;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeNamespacesResponseBody\namespaces\resourceSpec;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeNamespacesResponseBody\namespaces\resourceUsed;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeNamespacesResponseBody\namespaces\tags;

class namespaces extends Model
{
    /**
     * @var elasticResourceSpec
     */
    public $elasticResourceSpec;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var guaranteedResourceSpec
     */
    public $guaranteedResourceSpec;

    /**
     * @var bool
     */
    public $ha;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var resourceSpec
     */
    public $resourceSpec;

    /**
     * @var resourceUsed
     */
    public $resourceUsed;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'elasticResourceSpec' => 'ElasticResourceSpec',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'guaranteedResourceSpec' => 'GuaranteedResourceSpec',
        'ha' => 'Ha',
        'namespace' => 'Namespace',
        'resourceSpec' => 'ResourceSpec',
        'resourceUsed' => 'ResourceUsed',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (null !== $this->elasticResourceSpec) {
            $this->elasticResourceSpec->validate();
        }
        if (null !== $this->guaranteedResourceSpec) {
            $this->guaranteedResourceSpec->validate();
        }
        if (null !== $this->resourceSpec) {
            $this->resourceSpec->validate();
        }
        if (null !== $this->resourceUsed) {
            $this->resourceUsed->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticResourceSpec) {
            $res['ElasticResourceSpec'] = null !== $this->elasticResourceSpec ? $this->elasticResourceSpec->toArray($noStream) : $this->elasticResourceSpec;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->guaranteedResourceSpec) {
            $res['GuaranteedResourceSpec'] = null !== $this->guaranteedResourceSpec ? $this->guaranteedResourceSpec->toArray($noStream) : $this->guaranteedResourceSpec;
        }

        if (null !== $this->ha) {
            $res['Ha'] = $this->ha;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->resourceSpec) {
            $res['ResourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toArray($noStream) : $this->resourceSpec;
        }

        if (null !== $this->resourceUsed) {
            $res['ResourceUsed'] = null !== $this->resourceUsed ? $this->resourceUsed->toArray($noStream) : $this->resourceUsed;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ElasticResourceSpec'])) {
            $model->elasticResourceSpec = elasticResourceSpec::fromMap($map['ElasticResourceSpec']);
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['GuaranteedResourceSpec'])) {
            $model->guaranteedResourceSpec = guaranteedResourceSpec::fromMap($map['GuaranteedResourceSpec']);
        }

        if (isset($map['Ha'])) {
            $model->ha = $map['Ha'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['ResourceSpec'])) {
            $model->resourceSpec = resourceSpec::fromMap($map['ResourceSpec']);
        }

        if (isset($map['ResourceUsed'])) {
            $model->resourceUsed = resourceUsed::fromMap($map['ResourceUsed']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
