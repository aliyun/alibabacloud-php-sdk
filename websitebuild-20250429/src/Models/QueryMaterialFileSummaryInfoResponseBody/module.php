<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\QueryMaterialFileSummaryInfoResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var int
     */
    public $fileNum;

    /**
     * @var string
     */
    public $storageSize;
    protected $_name = [
        'fileNum' => 'FileNum',
        'storageSize' => 'StorageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileNum) {
            $res['FileNum'] = $this->fileNum;
        }

        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
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
        if (isset($map['FileNum'])) {
            $model->fileNum = $map['FileNum'];
        }

        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        return $model;
    }
}
