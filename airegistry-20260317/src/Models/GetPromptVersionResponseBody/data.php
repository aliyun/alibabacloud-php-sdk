<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIRegistry\V20260317\Models\GetPromptVersionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIRegistry\V20260317\Models\GetPromptVersionResponseBody\data\variables;

class data extends Model
{
    /**
     * @var string
     */
    public $commitMsg;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $promptKey;

    /**
     * @var string
     */
    public $srcUser;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $template;

    /**
     * @var variables[]
     */
    public $variables;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'commitMsg' => 'CommitMsg',
        'gmtModified' => 'GmtModified',
        'md5' => 'Md5',
        'promptKey' => 'PromptKey',
        'srcUser' => 'SrcUser',
        'status' => 'Status',
        'template' => 'Template',
        'variables' => 'Variables',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commitMsg) {
            $res['CommitMsg'] = $this->commitMsg;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }

        if (null !== $this->promptKey) {
            $res['PromptKey'] = $this->promptKey;
        }

        if (null !== $this->srcUser) {
            $res['SrcUser'] = $this->srcUser;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['Variables'] = [];
                $n1 = 0;
                foreach ($this->variables as $item1) {
                    $res['Variables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['CommitMsg'])) {
            $model->commitMsg = $map['CommitMsg'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }

        if (isset($map['PromptKey'])) {
            $model->promptKey = $map['PromptKey'];
        }

        if (isset($map['SrcUser'])) {
            $model->srcUser = $map['SrcUser'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }

        if (isset($map['Variables'])) {
            if (!empty($map['Variables'])) {
                $model->variables = [];
                $n1 = 0;
                foreach ($map['Variables'] as $item1) {
                    $model->variables[$n1] = variables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
