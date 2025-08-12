<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class TransformAction extends Model
{
    /**
     * @var FilterSetting
     */
    public $filterSetting;

    /**
     * @var string
     */
    public $labelKey;

    /**
     * @var string[]
     */
    public $mapping;

    /**
     * @var string
     */
    public $regExp;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $variable;
    protected $_name = [
        'filterSetting' => 'filterSetting',
        'labelKey' => 'labelKey',
        'mapping' => 'mapping',
        'regExp' => 'regExp',
        'source' => 'source',
        'target' => 'target',
        'type' => 'type',
        'value' => 'value',
        'variable' => 'variable',
    ];

    public function validate()
    {
        if (null !== $this->filterSetting) {
            $this->filterSetting->validate();
        }
        if (\is_array($this->mapping)) {
            Model::validateArray($this->mapping);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterSetting) {
            $res['filterSetting'] = null !== $this->filterSetting ? $this->filterSetting->toArray($noStream) : $this->filterSetting;
        }

        if (null !== $this->labelKey) {
            $res['labelKey'] = $this->labelKey;
        }

        if (null !== $this->mapping) {
            if (\is_array($this->mapping)) {
                $res['mapping'] = [];
                foreach ($this->mapping as $key1 => $value1) {
                    $res['mapping'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->regExp) {
            $res['regExp'] = $this->regExp;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->target) {
            $res['target'] = $this->target;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        if (null !== $this->variable) {
            $res['variable'] = $this->variable;
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
        if (isset($map['filterSetting'])) {
            $model->filterSetting = FilterSetting::fromMap($map['filterSetting']);
        }

        if (isset($map['labelKey'])) {
            $model->labelKey = $map['labelKey'];
        }

        if (isset($map['mapping'])) {
            if (!empty($map['mapping'])) {
                $model->mapping = [];
                foreach ($map['mapping'] as $key1 => $value1) {
                    $model->mapping[$key1] = $value1;
                }
            }
        }

        if (isset($map['regExp'])) {
            $model->regExp = $map['regExp'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['target'])) {
            $model->target = $map['target'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        if (isset($map['variable'])) {
            $model->variable = $map['variable'];
        }

        return $model;
    }
}
