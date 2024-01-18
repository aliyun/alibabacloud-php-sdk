<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeImportedLogCountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of logs that are added.
     *
     * @example 10
     *
     * @var int
     */
    public $importedLogCount;

    /**
     * @description The total number of logs.
     *
     * @example 59
     *
     * @var int
     */
    public $totalLogCount;

    /**
     * @description The number of logs that are not added.
     *
     * @example 49
     *
     * @var int
     */
    public $unImportedLogCount;
    protected $_name = [
        'importedLogCount'   => 'ImportedLogCount',
        'totalLogCount'      => 'TotalLogCount',
        'unImportedLogCount' => 'UnImportedLogCount',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
