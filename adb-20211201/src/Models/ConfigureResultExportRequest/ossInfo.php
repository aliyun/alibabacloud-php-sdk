<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ConfigureResultExportRequest;

use AlibabaCloud\Dara\Model;

class ossInfo extends Model
{
    /**
     * @var string
     */
    public $exportBasePath;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @var int
     */
    public $resultFileTtl;
    protected $_name = [
        'exportBasePath' => 'ExportBasePath',
        'resourceGroup' => 'ResourceGroup',
        'resultFileTtl' => 'ResultFileTtl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exportBasePath) {
            $res['ExportBasePath'] = $this->exportBasePath;
        }

        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }

        if (null !== $this->resultFileTtl) {
            $res['ResultFileTtl'] = $this->resultFileTtl;
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
        if (isset($map['ExportBasePath'])) {
            $model->exportBasePath = $map['ExportBasePath'];
        }

        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }

        if (isset($map['ResultFileTtl'])) {
            $model->resultFileTtl = $map['ResultFileTtl'];
        }

        return $model;
    }
}
