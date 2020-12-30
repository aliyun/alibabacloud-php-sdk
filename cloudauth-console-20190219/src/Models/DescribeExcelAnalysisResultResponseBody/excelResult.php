<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeExcelAnalysisResultResponseBody;

use AlibabaCloud\Tea\Model;

class excelResult extends Model
{
    /**
     * @var int
     */
    public $insertCount;

    /**
     * @var int
     */
    public $updateCount;

    /**
     * @var int
     */
    public $errorCount;

    /**
     * @var string[]
     */
    public $errorLine;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'insertCount' => 'InsertCount',
        'updateCount' => 'UpdateCount',
        'errorCount'  => 'ErrorCount',
        'errorLine'   => 'ErrorLine',
        'total'       => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->insertCount) {
            $res['InsertCount'] = $this->insertCount;
        }
        if (null !== $this->updateCount) {
            $res['UpdateCount'] = $this->updateCount;
        }
        if (null !== $this->errorCount) {
            $res['ErrorCount'] = $this->errorCount;
        }
        if (null !== $this->errorLine) {
            $res['ErrorLine'] = $this->errorLine;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return excelResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InsertCount'])) {
            $model->insertCount = $map['InsertCount'];
        }
        if (isset($map['UpdateCount'])) {
            $model->updateCount = $map['UpdateCount'];
        }
        if (isset($map['ErrorCount'])) {
            $model->errorCount = $map['ErrorCount'];
        }
        if (isset($map['ErrorLine'])) {
            if (!empty($map['ErrorLine'])) {
                $model->errorLine = $map['ErrorLine'];
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
