<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Tea\Model;

class QuestionPlugin extends Model
{
    /**
     * @example False
     *
     * @var bool
     */
    public $canSelect;

    /**
     * @var \AlibabaCloud\SDK\OpenITag\V20220616\Models\QuestionPlugin[]
     */
    public $children;

    /**
     * @example None
     *
     * @var string
     */
    public $defaultResult;

    /**
     * @description This parameter is required.
     *
     * @example True
     *
     * @var bool
     */
    public $display;

    /**
     * @var mixed[]
     */
    public $exif;

    /**
     * @example None
     *
     * @var string
     */
    public $hotKeyMap;

    /**
     * @description This parameter is required.
     *
     * @example 内部单选
     *
     * @var string
     */
    public $markTitle;

    /**
     * @example None
     *
     * @var string
     */
    public $markTitleAlias;

    /**
     * @description This parameter is required.
     *
     * @example False
     *
     * @var bool
     */
    public $mustFill;

    /**
     * @description This parameter is required.
     *
     * @var QuestionOption[]
     */
    public $options;

    /**
     * @var string[]
     */
    public $preOptions;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $questionId;

    /**
     * @example None
     *
     * @var string
     */
    public $rule;

    /**
     * @example None
     *
     * @var string
     */
    public $selectGroup;

    /**
     * @example False
     *
     * @var bool
     */
    public $selected;

    /**
     * @description This parameter is required.
     *
     * @example RADIO
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'canSelect'      => 'CanSelect',
        'children'       => 'Children',
        'defaultResult'  => 'DefaultResult',
        'display'        => 'Display',
        'exif'           => 'Exif',
        'hotKeyMap'      => 'HotKeyMap',
        'markTitle'      => 'MarkTitle',
        'markTitleAlias' => 'MarkTitleAlias',
        'mustFill'       => 'MustFill',
        'options'        => 'Options',
        'preOptions'     => 'PreOptions',
        'questionId'     => 'QuestionId',
        'rule'           => 'Rule',
        'selectGroup'    => 'SelectGroup',
        'selected'       => 'Selected',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canSelect) {
            $res['CanSelect'] = $this->canSelect;
        }
        if (null !== $this->children) {
            $res['Children'] = [];
            if (null !== $this->children && \is_array($this->children)) {
                $n = 0;
                foreach ($this->children as $item) {
                    $res['Children'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->defaultResult) {
            $res['DefaultResult'] = $this->defaultResult;
        }
        if (null !== $this->display) {
            $res['Display'] = $this->display;
        }
        if (null !== $this->exif) {
            $res['Exif'] = $this->exif;
        }
        if (null !== $this->hotKeyMap) {
            $res['HotKeyMap'] = $this->hotKeyMap;
        }
        if (null !== $this->markTitle) {
            $res['MarkTitle'] = $this->markTitle;
        }
        if (null !== $this->markTitleAlias) {
            $res['MarkTitleAlias'] = $this->markTitleAlias;
        }
        if (null !== $this->mustFill) {
            $res['MustFill'] = $this->mustFill;
        }
        if (null !== $this->options) {
            $res['Options'] = [];
            if (null !== $this->options && \is_array($this->options)) {
                $n = 0;
                foreach ($this->options as $item) {
                    $res['Options'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->preOptions) {
            $res['PreOptions'] = $this->preOptions;
        }
        if (null !== $this->questionId) {
            $res['QuestionId'] = $this->questionId;
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->selectGroup) {
            $res['SelectGroup'] = $this->selectGroup;
        }
        if (null !== $this->selected) {
            $res['Selected'] = $this->selected;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuestionPlugin
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanSelect'])) {
            $model->canSelect = $map['CanSelect'];
        }
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n               = 0;
                foreach ($map['Children'] as $item) {
                    $model->children[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DefaultResult'])) {
            $model->defaultResult = $map['DefaultResult'];
        }
        if (isset($map['Display'])) {
            $model->display = $map['Display'];
        }
        if (isset($map['Exif'])) {
            $model->exif = $map['Exif'];
        }
        if (isset($map['HotKeyMap'])) {
            $model->hotKeyMap = $map['HotKeyMap'];
        }
        if (isset($map['MarkTitle'])) {
            $model->markTitle = $map['MarkTitle'];
        }
        if (isset($map['MarkTitleAlias'])) {
            $model->markTitleAlias = $map['MarkTitleAlias'];
        }
        if (isset($map['MustFill'])) {
            $model->mustFill = $map['MustFill'];
        }
        if (isset($map['Options'])) {
            if (!empty($map['Options'])) {
                $model->options = [];
                $n              = 0;
                foreach ($map['Options'] as $item) {
                    $model->options[$n++] = null !== $item ? QuestionOption::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PreOptions'])) {
            if (!empty($map['PreOptions'])) {
                $model->preOptions = $map['PreOptions'];
            }
        }
        if (isset($map['QuestionId'])) {
            $model->questionId = $map['QuestionId'];
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['SelectGroup'])) {
            $model->selectGroup = $map['SelectGroup'];
        }
        if (isset($map['Selected'])) {
            $model->selected = $map['Selected'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
