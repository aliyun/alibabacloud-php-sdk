<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeNamespacesResponseBody;

use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeNamespacesResponseBody\namespaces\elasticResourceSpec;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeNamespacesResponseBody\namespaces\guaranteedResourceSpec;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeNamespacesResponseBody\namespaces\resourceSpec;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeNamespacesResponseBody\namespaces\resourceUsed;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeNamespacesResponseBody\namespaces\tags;
use AlibabaCloud\Tea\Model;

class namespaces extends Model
{
    /**
     * @var elasticResourceSpec
     */
    public $elasticResourceSpec;

    /**
     * @example 1629879567394
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1629879567394
     *
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
     * @example ns-1
     *
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
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'elasticResourceSpec'    => 'ElasticResourceSpec',
        'gmtCreate'              => 'GmtCreate',
        'gmtModified'            => 'GmtModified',
        'guaranteedResourceSpec' => 'GuaranteedResourceSpec',
        'ha'                     => 'Ha',
        'namespace'              => 'Namespace',
        'resourceSpec'           => 'ResourceSpec',
        'resourceUsed'           => 'ResourceUsed',
        'status'                 => 'Status',
        'tags'                   => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticResourceSpec) {
            $res['ElasticResourceSpec'] = null !== $this->elasticResourceSpec ? $this->elasticResourceSpec->toMap() : null;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->guaranteedResourceSpec) {
            $res['GuaranteedResourceSpec'] = null !== $this->guaranteedResourceSpec ? $this->guaranteedResourceSpec->toMap() : null;
        }
        if (null !== $this->ha) {
            $res['Ha'] = $this->ha;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->resourceSpec) {
            $res['ResourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toMap() : null;
        }
        if (null !== $this->resourceUsed) {
            $res['ResourceUsed'] = null !== $this->resourceUsed ? $this->resourceUsed->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return namespaces
     */
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
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
