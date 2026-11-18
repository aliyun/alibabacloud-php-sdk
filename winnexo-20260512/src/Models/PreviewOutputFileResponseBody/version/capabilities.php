<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\PreviewOutputFileResponseBody\version;

use AlibabaCloud\Dara\Model;

class capabilities extends Model
{
    /**
     * @var bool
     */
    public $canBrowserOpen;

    /**
     * @var bool
     */
    public $canDownload;

    /**
     * @var bool
     */
    public $canEdit;

    /**
     * @var bool
     */
    public $canRestore;

    /**
     * @var bool
     */
    public $canSaveAsKnowledge;

    /**
     * @var bool
     */
    public $canShare;
    protected $_name = [
        'canBrowserOpen' => 'canBrowserOpen',
        'canDownload' => 'canDownload',
        'canEdit' => 'canEdit',
        'canRestore' => 'canRestore',
        'canSaveAsKnowledge' => 'canSaveAsKnowledge',
        'canShare' => 'canShare',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canBrowserOpen) {
            $res['canBrowserOpen'] = $this->canBrowserOpen;
        }

        if (null !== $this->canDownload) {
            $res['canDownload'] = $this->canDownload;
        }

        if (null !== $this->canEdit) {
            $res['canEdit'] = $this->canEdit;
        }

        if (null !== $this->canRestore) {
            $res['canRestore'] = $this->canRestore;
        }

        if (null !== $this->canSaveAsKnowledge) {
            $res['canSaveAsKnowledge'] = $this->canSaveAsKnowledge;
        }

        if (null !== $this->canShare) {
            $res['canShare'] = $this->canShare;
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
        if (isset($map['canBrowserOpen'])) {
            $model->canBrowserOpen = $map['canBrowserOpen'];
        }

        if (isset($map['canDownload'])) {
            $model->canDownload = $map['canDownload'];
        }

        if (isset($map['canEdit'])) {
            $model->canEdit = $map['canEdit'];
        }

        if (isset($map['canRestore'])) {
            $model->canRestore = $map['canRestore'];
        }

        if (isset($map['canSaveAsKnowledge'])) {
            $model->canSaveAsKnowledge = $map['canSaveAsKnowledge'];
        }

        if (isset($map['canShare'])) {
            $model->canShare = $map['canShare'];
        }

        return $model;
    }
}
