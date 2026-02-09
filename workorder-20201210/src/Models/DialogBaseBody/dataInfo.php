<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20201210\Models\DialogBaseBody;

use AlibabaCloud\Dara\Model;

class dataInfo extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var mixed[][]
     */
    public $component;

    /**
     * @var mixed
     */
    public $container;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contentDesensitized;

    /**
     * @var int
     */
    public $editable;

    /**
     * @var mixed[][]
     */
    public $props;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var int
     */
    public $schemaId;

    /**
     * @var string
     */
    public $serviceChannel;

    /**
     * @var string
     */
    public $title;

    /**
     * @var mixed[]
     */
    public $values;
    protected $_name = [
        'bizId' => 'BizId',
        'bizType' => 'BizType',
        'component' => 'Component',
        'container' => 'Container',
        'content' => 'Content',
        'contentDesensitized' => 'ContentDesensitized',
        'editable' => 'Editable',
        'props' => 'Props',
        'schema' => 'Schema',
        'schemaId' => 'SchemaId',
        'serviceChannel' => 'ServiceChannel',
        'title' => 'Title',
        'values' => 'Values',
    ];

    public function validate()
    {
        if (\is_array($this->component)) {
            Model::validateArray($this->component);
        }
        if (\is_array($this->props)) {
            Model::validateArray($this->props);
        }
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->component) {
            if (\is_array($this->component)) {
                $res['Component'] = [];
                $n1 = 0;
                foreach ($this->component as $item1) {
                    if (\is_array($item1)) {
                        $res['Component'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Component'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->container) {
            $res['Container'] = $this->container;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->contentDesensitized) {
            $res['ContentDesensitized'] = $this->contentDesensitized;
        }

        if (null !== $this->editable) {
            $res['Editable'] = $this->editable;
        }

        if (null !== $this->props) {
            if (\is_array($this->props)) {
                $res['Props'] = [];
                $n1 = 0;
                foreach ($this->props as $item1) {
                    if (\is_array($item1)) {
                        $res['Props'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Props'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        if (null !== $this->schemaId) {
            $res['SchemaId'] = $this->schemaId;
        }

        if (null !== $this->serviceChannel) {
            $res['ServiceChannel'] = $this->serviceChannel;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                foreach ($this->values as $key1 => $value1) {
                    $res['Values'][$key1] = $value1;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['Component'])) {
            if (!empty($map['Component'])) {
                $model->component = [];
                $n1 = 0;
                foreach ($map['Component'] as $item1) {
                    if (!empty($item1)) {
                        $model->component[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->component[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['Container'])) {
            $model->container = $map['Container'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ContentDesensitized'])) {
            $model->contentDesensitized = $map['ContentDesensitized'];
        }

        if (isset($map['Editable'])) {
            $model->editable = $map['Editable'];
        }

        if (isset($map['Props'])) {
            if (!empty($map['Props'])) {
                $model->props = [];
                $n1 = 0;
                foreach ($map['Props'] as $item1) {
                    if (!empty($item1)) {
                        $model->props[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->props[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        if (isset($map['SchemaId'])) {
            $model->schemaId = $map['SchemaId'];
        }

        if (isset($map['ServiceChannel'])) {
            $model->serviceChannel = $map['ServiceChannel'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                foreach ($map['Values'] as $key1 => $value1) {
                    $model->values[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
