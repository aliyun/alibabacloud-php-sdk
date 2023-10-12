<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ScriptHistory\input;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ScriptHistory\output;
use AlibabaCloud\Tea\Model;

class ScriptHistory extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $content;

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
    public $scriptId;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'comment'   => 'Comment',
        'content'   => 'Content',
        'gmtCreate' => 'GmtCreate',
        'gmtModify' => 'GmtModify',
        'input'     => 'Input',
        'output'    => 'Output',
        'scriptId'  => 'ScriptId',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
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
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScriptHistory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
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
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
