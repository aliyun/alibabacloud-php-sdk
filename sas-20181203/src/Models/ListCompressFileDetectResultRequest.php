<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListCompressFileDetectResultRequest extends Model
{
    /**
     * @description The page number. Default value: 1.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The identifier of the file. Only MD5 hash values are supported.
     *
     * @example 0a212417e65c26ff133cfff28f6c****
     *
     * @var string
     */
    public $hashKey;

    /**
     * @description The number of entries per page. Default value: 20.
     *
     * This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The source IP address of the request.
     *
     * @example 27.9.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'hashKey' => 'HashKey',
        'pageSize' => 'PageSize',
        'sourceIp' => 'SourceIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->hashKey) {
            $res['HashKey'] = $this->hashKey;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCompressFileDetectResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['HashKey'])) {
            $model->hashKey = $map['HashKey'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
