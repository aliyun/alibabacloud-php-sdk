<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreSchemaDetailsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreSchemaDetailsResponseBody\restoreSchema\restoreSchemaDetails;

class restoreSchema extends Model
{
    /**
     * @var int
     */
    public $fail;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var restoreSchemaDetails
     */
    public $restoreSchemaDetails;

    /**
     * @var int
     */
    public $succeed;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'fail' => 'Fail',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'restoreSchemaDetails' => 'RestoreSchemaDetails',
        'succeed' => 'Succeed',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (null !== $this->restoreSchemaDetails) {
            $this->restoreSchemaDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fail) {
            $res['Fail'] = $this->fail;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->restoreSchemaDetails) {
            $res['RestoreSchemaDetails'] = null !== $this->restoreSchemaDetails ? $this->restoreSchemaDetails->toArray($noStream) : $this->restoreSchemaDetails;
        }

        if (null !== $this->succeed) {
            $res['Succeed'] = $this->succeed;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Fail'])) {
            $model->fail = $map['Fail'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RestoreSchemaDetails'])) {
            $model->restoreSchemaDetails = restoreSchemaDetails::fromMap($map['RestoreSchemaDetails']);
        }

        if (isset($map['Succeed'])) {
            $model->succeed = $map['Succeed'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
