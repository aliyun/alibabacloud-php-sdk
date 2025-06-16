<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest\commodity;

use AlibabaCloud\Dara\Model;

class meteringEntityMappings extends Model
{
    /**
     * @var string[]
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
        if (\is_array($this->entityIds)) {
            Model::validateArray($this->entityIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityIds) {
            if (\is_array($this->entityIds)) {
                $res['EntityIds'] = [];
                $n1 = 0;
                foreach ($this->entityIds as $item1) {
                    $res['EntityIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['EntityIds'])) {
                $model->entityIds = [];
                $n1 = 0;
                foreach ($map['EntityIds'] as $item1) {
                    $model->entityIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
