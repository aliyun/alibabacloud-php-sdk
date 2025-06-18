<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetSummaryTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetSummaryTemplateResponseBody\data\propertyList;

class data extends Model
{
    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $editor;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var propertyList[]
     */
    public $propertyList;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'editor' => 'Editor',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'propertyList' => 'PropertyList',
        'state' => 'State',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->propertyList)) {
            Model::validateArray($this->propertyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->editor) {
            $res['Editor'] = $this->editor;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->propertyList) {
            if (\is_array($this->propertyList)) {
                $res['PropertyList'] = [];
                $n1 = 0;
                foreach ($this->propertyList as $item1) {
                    $res['PropertyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['Editor'])) {
            $model->editor = $map['Editor'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PropertyList'])) {
            if (!empty($map['PropertyList'])) {
                $model->propertyList = [];
                $n1 = 0;
                foreach ($map['PropertyList'] as $item1) {
                    $model->propertyList[$n1] = propertyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
