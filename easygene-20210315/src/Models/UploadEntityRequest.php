<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class UploadEntityRequest extends Model
{
    /**
     * @var string
     */
    public $entityCSVFile;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'entityCSVFile' => 'EntityCSVFile',
        'workspace'     => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityCSVFile) {
            $res['EntityCSVFile'] = $this->entityCSVFile;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadEntityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityCSVFile'])) {
            $model->entityCSVFile = $map['EntityCSVFile'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
