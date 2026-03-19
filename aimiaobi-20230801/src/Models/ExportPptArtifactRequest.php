<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ExportPptArtifactRequest extends Model
{
    /**
     * @var bool
     */
    public $edit;

    /**
     * @var string
     */
    public $exportFileType;

    /**
     * @var int
     */
    public $pptArtifactId;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var bool
     */
    public $zip;
    protected $_name = [
        'edit' => 'Edit',
        'exportFileType' => 'ExportFileType',
        'pptArtifactId' => 'PptArtifactId',
        'workspaceId' => 'WorkspaceId',
        'zip' => 'Zip',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edit) {
            $res['Edit'] = $this->edit;
        }

        if (null !== $this->exportFileType) {
            $res['ExportFileType'] = $this->exportFileType;
        }

        if (null !== $this->pptArtifactId) {
            $res['PptArtifactId'] = $this->pptArtifactId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        if (null !== $this->zip) {
            $res['Zip'] = $this->zip;
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
        if (isset($map['Edit'])) {
            $model->edit = $map['Edit'];
        }

        if (isset($map['ExportFileType'])) {
            $model->exportFileType = $map['ExportFileType'];
        }

        if (isset($map['PptArtifactId'])) {
            $model->pptArtifactId = $map['PptArtifactId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        if (isset($map['Zip'])) {
            $model->zip = $map['Zip'];
        }

        return $model;
    }
}
