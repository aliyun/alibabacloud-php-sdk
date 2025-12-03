<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreFullDetailsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreFullDetailsResponseBody\restoreFull\restoreFullDetails;

class restoreFull extends Model
{
    /**
     * @var string
     */
    public $dataSize;

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
     * @var restoreFullDetails
     */
    public $restoreFullDetails;

    /**
     * @var string
     */
    public $speed;

    /**
     * @var int
     */
    public $succeed;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'dataSize' => 'DataSize',
        'fail' => 'Fail',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'restoreFullDetails' => 'RestoreFullDetails',
        'speed' => 'Speed',
        'succeed' => 'Succeed',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (null !== $this->restoreFullDetails) {
            $this->restoreFullDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }

        if (null !== $this->fail) {
            $res['Fail'] = $this->fail;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->restoreFullDetails) {
            $res['RestoreFullDetails'] = null !== $this->restoreFullDetails ? $this->restoreFullDetails->toArray($noStream) : $this->restoreFullDetails;
        }

        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
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
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }

        if (isset($map['Fail'])) {
            $model->fail = $map['Fail'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RestoreFullDetails'])) {
            $model->restoreFullDetails = restoreFullDetails::fromMap($map['RestoreFullDetails']);
        }

        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
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
