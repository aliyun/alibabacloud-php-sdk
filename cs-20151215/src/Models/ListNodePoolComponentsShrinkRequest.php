<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class ListNodePoolComponentsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var string
     */
    public $instanceTypesShrink;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $nodepoolId;

    /**
     * @var string
     */
    public $nodepoolType;
    protected $_name = [
        'imageId' => 'image_id',
        'imageType' => 'image_type',
        'instanceTypesShrink' => 'instance_types',
        'maxResults' => 'max_results',
        'nextToken' => 'next_token',
        'nodepoolId' => 'nodepool_id',
        'nodepoolType' => 'nodepool_type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['image_id'] = $this->imageId;
        }

        if (null !== $this->imageType) {
            $res['image_type'] = $this->imageType;
        }

        if (null !== $this->instanceTypesShrink) {
            $res['instance_types'] = $this->instanceTypesShrink;
        }

        if (null !== $this->maxResults) {
            $res['max_results'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['next_token'] = $this->nextToken;
        }

        if (null !== $this->nodepoolId) {
            $res['nodepool_id'] = $this->nodepoolId;
        }

        if (null !== $this->nodepoolType) {
            $res['nodepool_type'] = $this->nodepoolType;
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
        if (isset($map['image_id'])) {
            $model->imageId = $map['image_id'];
        }

        if (isset($map['image_type'])) {
            $model->imageType = $map['image_type'];
        }

        if (isset($map['instance_types'])) {
            $model->instanceTypesShrink = $map['instance_types'];
        }

        if (isset($map['max_results'])) {
            $model->maxResults = $map['max_results'];
        }

        if (isset($map['next_token'])) {
            $model->nextToken = $map['next_token'];
        }

        if (isset($map['nodepool_id'])) {
            $model->nodepoolId = $map['nodepool_id'];
        }

        if (isset($map['nodepool_type'])) {
            $model->nodepoolType = $map['nodepool_type'];
        }

        return $model;
    }
}
