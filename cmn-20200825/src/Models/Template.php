<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\Template\input;
use AlibabaCloud\SDK\Cmn\V20200825\Models\Template\output;
use AlibabaCloud\Tea\Model;

class Template extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var input[]
     */
    public $input;

    /**
     * @var output[]
     */
    public $output;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateType;
    protected $_name = [
        'category'     => 'Category',
        'comment'      => 'Comment',
        'gmtCreate'    => 'GmtCreate',
        'gmtModify'    => 'GmtModify',
        'input'        => 'Input',
        'output'       => 'Output',
        'templateName' => 'TemplateName',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->input) {
            $res['Input'] = [];
            if (null !== $this->input && \is_array($this->input)) {
                $n = 0;
                foreach ($this->input as $item) {
                    $res['Input'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->output) {
            $res['Output'] = [];
            if (null !== $this->output && \is_array($this->output)) {
                $n = 0;
                foreach ($this->output as $item) {
                    $res['Output'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['Input'])) {
            if (!empty($map['Input'])) {
                $model->input = [];
                $n            = 0;
                foreach ($map['Input'] as $item) {
                    $model->input[$n++] = null !== $item ? input::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Output'])) {
            if (!empty($map['Output'])) {
                $model->output = [];
                $n             = 0;
                foreach ($map['Output'] as $item) {
                    $model->output[$n++] = null !== $item ? output::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
