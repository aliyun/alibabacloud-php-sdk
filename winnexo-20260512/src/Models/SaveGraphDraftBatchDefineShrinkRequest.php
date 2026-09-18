<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class SaveGraphDraftBatchDefineShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $draftChangeIdsShrink;

    /**
     * @var string
     */
    public $graphName;

    /**
     * @var string
     */
    public $saveMode;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $yamlEdit;
    protected $_name = [
        'draftChangeIdsShrink' => 'draftChangeIds',
        'graphName' => 'graphName',
        'saveMode' => 'saveMode',
        'tenantId' => 'tenantId',
        'yamlEdit' => 'yamlEdit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->draftChangeIdsShrink) {
            $res['draftChangeIds'] = $this->draftChangeIdsShrink;
        }

        if (null !== $this->graphName) {
            $res['graphName'] = $this->graphName;
        }

        if (null !== $this->saveMode) {
            $res['saveMode'] = $this->saveMode;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->yamlEdit) {
            $res['yamlEdit'] = $this->yamlEdit;
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
        if (isset($map['draftChangeIds'])) {
            $model->draftChangeIdsShrink = $map['draftChangeIds'];
        }

        if (isset($map['graphName'])) {
            $model->graphName = $map['graphName'];
        }

        if (isset($map['saveMode'])) {
            $model->saveMode = $map['saveMode'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['yamlEdit'])) {
            $model->yamlEdit = $map['yamlEdit'];
        }

        return $model;
    }
}
