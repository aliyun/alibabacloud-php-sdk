<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeImportedLogCountResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $importedLogCount;

    /**
     * @var int
     */
    public $totalLogCount;

    /**
     * @var int
     */
    public $unImportedLogCount;
    protected $_name = [
        'importedLogCount' => 'ImportedLogCount',
        'totalLogCount' => 'TotalLogCount',
        'unImportedLogCount' => 'UnImportedLogCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->importedLogCount) {
            $res['ImportedLogCount'] = $this->importedLogCount;
        }

        if (null !== $this->totalLogCount) {
            $res['TotalLogCount'] = $this->totalLogCount;
        }

        if (null !== $this->unImportedLogCount) {
            $res['UnImportedLogCount'] = $this->unImportedLogCount;
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
        if (isset($map['ImportedLogCount'])) {
            $model->importedLogCount = $map['ImportedLogCount'];
        }

        if (isset($map['TotalLogCount'])) {
            $model->totalLogCount = $map['TotalLogCount'];
        }

        if (isset($map['UnImportedLogCount'])) {
            $model->unImportedLogCount = $map['UnImportedLogCount'];
        }

        return $model;
    }
}
