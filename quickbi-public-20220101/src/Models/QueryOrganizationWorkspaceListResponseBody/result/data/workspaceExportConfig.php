<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryOrganizationWorkspaceListResponseBody\result\data;

use AlibabaCloud\Dara\Model;

class workspaceExportConfig extends Model
{
    /**
     * @var bool
     */
    public $allowExcelImageFile;

    /**
     * @var bool
     */
    public $dataExport;

    /**
     * @var bool
     */
    public $defaultExportType;

    /**
     * @var bool
     */
    public $exportMainSwitch;

    /**
     * @var bool
     */
    public $exportToLocal;

    /**
     * @var bool
     */
    public $exportToPublicWork;

    /**
     * @var bool
     */
    public $exportToServer;

    /**
     * @var bool
     */
    public $imageExport;

    /**
     * @var bool
     */
    public $pdfExport;
    protected $_name = [
        'allowExcelImageFile' => 'AllowExcelImageFile',
        'dataExport' => 'DataExport',
        'defaultExportType' => 'DefaultExportType',
        'exportMainSwitch' => 'ExportMainSwitch',
        'exportToLocal' => 'ExportToLocal',
        'exportToPublicWork' => 'ExportToPublicWork',
        'exportToServer' => 'ExportToServer',
        'imageExport' => 'ImageExport',
        'pdfExport' => 'PdfExport',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowExcelImageFile) {
            $res['AllowExcelImageFile'] = $this->allowExcelImageFile;
        }

        if (null !== $this->dataExport) {
            $res['DataExport'] = $this->dataExport;
        }

        if (null !== $this->defaultExportType) {
            $res['DefaultExportType'] = $this->defaultExportType;
        }

        if (null !== $this->exportMainSwitch) {
            $res['ExportMainSwitch'] = $this->exportMainSwitch;
        }

        if (null !== $this->exportToLocal) {
            $res['ExportToLocal'] = $this->exportToLocal;
        }

        if (null !== $this->exportToPublicWork) {
            $res['ExportToPublicWork'] = $this->exportToPublicWork;
        }

        if (null !== $this->exportToServer) {
            $res['ExportToServer'] = $this->exportToServer;
        }

        if (null !== $this->imageExport) {
            $res['ImageExport'] = $this->imageExport;
        }

        if (null !== $this->pdfExport) {
            $res['PdfExport'] = $this->pdfExport;
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
        if (isset($map['AllowExcelImageFile'])) {
            $model->allowExcelImageFile = $map['AllowExcelImageFile'];
        }

        if (isset($map['DataExport'])) {
            $model->dataExport = $map['DataExport'];
        }

        if (isset($map['DefaultExportType'])) {
            $model->defaultExportType = $map['DefaultExportType'];
        }

        if (isset($map['ExportMainSwitch'])) {
            $model->exportMainSwitch = $map['ExportMainSwitch'];
        }

        if (isset($map['ExportToLocal'])) {
            $model->exportToLocal = $map['ExportToLocal'];
        }

        if (isset($map['ExportToPublicWork'])) {
            $model->exportToPublicWork = $map['ExportToPublicWork'];
        }

        if (isset($map['ExportToServer'])) {
            $model->exportToServer = $map['ExportToServer'];
        }

        if (isset($map['ImageExport'])) {
            $model->imageExport = $map['ImageExport'];
        }

        if (isset($map['PdfExport'])) {
            $model->pdfExport = $map['PdfExport'];
        }

        return $model;
    }
}
