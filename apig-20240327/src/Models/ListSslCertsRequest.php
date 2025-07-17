<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class ListSslCertsRequest extends Model
{
    /**
     * @description Name matching keyword.
     *
     * @example ali
     *
     * @var string
     */
    public $certNameLike;

    /**
     * @description Domain name.
     *
     * @example fun.iot.evideocloud.com.cn
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Page number, default is 1
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Page size, default is 10
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'certNameLike' => 'certNameLike',
        'domainName' => 'domainName',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->certNameLike) {
            $res['certNameLike'] = $this->certNameLike;
        }
        if (null !== $this->domainName) {
            $res['domainName'] = $this->domainName;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSslCertsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['certNameLike'])) {
            $model->certNameLike = $map['certNameLike'];
        }
        if (isset($map['domainName'])) {
            $model->domainName = $map['domainName'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}
