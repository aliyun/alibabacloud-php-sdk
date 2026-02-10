<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ExportVulRequest;

use AlibabaCloud\Dara\Model;

class vulEntityList extends Model
{
    /**
     * @var string
     */
    public $entityName;

    /**
     * @var string
     */
    public $entityVersion;
    protected $_name = [
        'entityName' => 'EntityName',
        'entityVersion' => 'EntityVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }

        if (null !== $this->entityVersion) {
            $res['EntityVersion'] = $this->entityVersion;
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
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }

        if (isset($map['EntityVersion'])) {
            $model->entityVersion = $map['EntityVersion'];
        }

        return $model;
    }
}
