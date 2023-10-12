<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\Scheme\input;
use AlibabaCloud\SDK\Cmn\V20200825\Models\Scheme\output;
use AlibabaCloud\Tea\Model;

class Scheme extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $description;

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
    public $schemeId;

    /**
     * @var string
     */
    public $schemeName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $view;
    protected $_name = [
        'category'    => 'Category',
        'content'     => 'Content',
        'description' => 'Description',
        'gmtCreate'   => 'GmtCreate',
        'gmtModify'   => 'GmtModify',
        'input'       => 'Input',
        'output'      => 'Output',
        'schemeId'    => 'SchemeId',
        'schemeName'  => 'SchemeName',
        'status'      => 'Status',
        'view'        => 'View',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->schemeId) {
            $res['SchemeId'] = $this->schemeId;
        }
        if (null !== $this->schemeName) {
            $res['SchemeName'] = $this->schemeName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->view) {
            $res['View'] = $this->view;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Scheme
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['SchemeId'])) {
            $model->schemeId = $map['SchemeId'];
        }
        if (isset($map['SchemeName'])) {
            $model->schemeName = $map['SchemeName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['View'])) {
            $model->view = $map['View'];
        }

        return $model;
    }
}
