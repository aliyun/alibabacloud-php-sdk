<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\commodity\marketplaceMetadata;

use AlibabaCloud\Dara\Model;

class meteringEntityMappings extends Model
{
    /**
     * @var string
     */
    public $entityIds;

    /**
     * @var string
     */
    public $specificationName;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'entityIds' => 'EntityIds',
        'specificationName' => 'SpecificationName',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityIds) {
            $res['EntityIds'] = $this->entityIds;
        }

        if (null !== $this->specificationName) {
            $res['SpecificationName'] = $this->specificationName;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
        if (isset($map['EntityIds'])) {
            $model->entityIds = $map['EntityIds'];
        }

        if (isset($map['SpecificationName'])) {
            $model->specificationName = $map['SpecificationName'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
