<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Jarvispublic\V20180621\Models;

use AlibabaCloud\Tea\Model;

class DescribeConsoleAccessWhiteListRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $dstIP;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sourceCode;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $srcIP;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $whiteListType;

    /**
     * @var string
     */
    public $queryProduct;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'dstIP'         => 'DstIP',
        'lang'          => 'Lang',
        'pageSize'      => 'PageSize',
        'sourceCode'    => 'SourceCode',
        'sourceIp'      => 'SourceIp',
        'srcIP'         => 'SrcIP',
        'status'        => 'Status',
        'whiteListType' => 'WhiteListType',
        'queryProduct'  => 'queryProduct',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dstIP) {
            $res['DstIP'] = $this->dstIP;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sourceCode) {
            $res['SourceCode'] = $this->sourceCode;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->srcIP) {
            $res['SrcIP'] = $this->srcIP;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->whiteListType) {
            $res['WhiteListType'] = $this->whiteListType;
        }
        if (null !== $this->queryProduct) {
            $res['queryProduct'] = $this->queryProduct;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConsoleAccessWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DstIP'])) {
            $model->dstIP = $map['DstIP'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SourceCode'])) {
            $model->sourceCode = $map['SourceCode'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['SrcIP'])) {
            $model->srcIP = $map['SrcIP'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WhiteListType'])) {
            $model->whiteListType = $map['WhiteListType'];
        }
        if (isset($map['queryProduct'])) {
            $model->queryProduct = $map['queryProduct'];
        }

        return $model;
    }
}
