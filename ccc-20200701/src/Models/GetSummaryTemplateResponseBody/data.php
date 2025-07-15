<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetSummaryTemplateResponseBody;

use AlibabaCloud\SDK\CCC\V20200701\Models\GetSummaryTemplateResponseBody\data\propertyList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 8939-4223-86d0-6bd187905cc8
     *
     * @var string
     */
    public $categoryId;

    /**
     * @example editor-xxx@ccc-test
     *
     * @var string
     */
    public $editor;

    /**
     * @example ccc-test
     *
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
     * @example Enabled
     *
     * @var string
     */
    public $state;

    /**
     * @example 43c2671b-8939-4223-86d0-6bd187905cc8_1717664210492
     *
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

    public function validate() {}

    public function toMap()
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
            $res['PropertyList'] = [];
            if (null !== $this->propertyList && \is_array($this->propertyList)) {
                $n = 0;
                foreach ($this->propertyList as $item) {
                    $res['PropertyList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n = 0;
                foreach ($map['PropertyList'] as $item) {
                    $model->propertyList[$n++] = null !== $item ? propertyList::fromMap($item) : $item;
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
