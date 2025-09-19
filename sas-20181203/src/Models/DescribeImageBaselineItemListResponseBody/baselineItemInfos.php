<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineItemListResponseBody;

use AlibabaCloud\Dara\Model;

class baselineItemInfos extends Model
{
    /**
     * @var string
     */
    public $baselineClassAlias;

    /**
     * @var string
     */
    public $baselineClassKey;

    /**
     * @var string
     */
    public $baselineItemAlias;

    /**
     * @var string
     */
    public $baselineItemKey;

    /**
     * @var string
     */
    public $baselineNameAlias;

    /**
     * @var string
     */
    public $baselineNameKey;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $whiteList;
    protected $_name = [
        'baselineClassAlias' => 'BaselineClassAlias',
        'baselineClassKey' => 'BaselineClassKey',
        'baselineItemAlias' => 'BaselineItemAlias',
        'baselineItemKey' => 'BaselineItemKey',
        'baselineNameAlias' => 'BaselineNameAlias',
        'baselineNameKey' => 'BaselineNameKey',
        'status' => 'Status',
        'whiteList' => 'WhiteList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baselineClassAlias) {
            $res['BaselineClassAlias'] = $this->baselineClassAlias;
        }

        if (null !== $this->baselineClassKey) {
            $res['BaselineClassKey'] = $this->baselineClassKey;
        }

        if (null !== $this->baselineItemAlias) {
            $res['BaselineItemAlias'] = $this->baselineItemAlias;
        }

        if (null !== $this->baselineItemKey) {
            $res['BaselineItemKey'] = $this->baselineItemKey;
        }

        if (null !== $this->baselineNameAlias) {
            $res['BaselineNameAlias'] = $this->baselineNameAlias;
        }

        if (null !== $this->baselineNameKey) {
            $res['BaselineNameKey'] = $this->baselineNameKey;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
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
        if (isset($map['BaselineClassAlias'])) {
            $model->baselineClassAlias = $map['BaselineClassAlias'];
        }

        if (isset($map['BaselineClassKey'])) {
            $model->baselineClassKey = $map['BaselineClassKey'];
        }

        if (isset($map['BaselineItemAlias'])) {
            $model->baselineItemAlias = $map['BaselineItemAlias'];
        }

        if (isset($map['BaselineItemKey'])) {
            $model->baselineItemKey = $map['BaselineItemKey'];
        }

        if (isset($map['BaselineNameAlias'])) {
            $model->baselineNameAlias = $map['BaselineNameAlias'];
        }

        if (isset($map['BaselineNameKey'])) {
            $model->baselineNameKey = $map['BaselineNameKey'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WhiteList'])) {
            $model->whiteList = $map['WhiteList'];
        }

        return $model;
    }
}
