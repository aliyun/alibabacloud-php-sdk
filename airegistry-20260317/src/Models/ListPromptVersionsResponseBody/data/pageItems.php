<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIRegistry\V20260317\Models\ListPromptVersionsResponseBody\data;

use AlibabaCloud\Dara\Model;

class pageItems extends Model
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
    public $version;
    protected $_name = [
        'commitMsg' => 'CommitMsg',
        'gmtModified' => 'GmtModified',
        'promptKey' => 'PromptKey',
        'srcUser' => 'SrcUser',
        'status' => 'Status',
        'version' => 'Version',
    ];

    public function validate()
    {
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

        if (null !== $this->promptKey) {
            $res['PromptKey'] = $this->promptKey;
        }

        if (null !== $this->srcUser) {
            $res['SrcUser'] = $this->srcUser;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['PromptKey'])) {
            $model->promptKey = $map['PromptKey'];
        }

        if (isset($map['SrcUser'])) {
            $model->srcUser = $map['SrcUser'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
