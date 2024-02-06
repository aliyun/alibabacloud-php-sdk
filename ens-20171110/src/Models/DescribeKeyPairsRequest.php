<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeKeyPairsRequest extends Model
{
    /**
     * @var string
     */
    public $keyPairId;

    /**
     * @description The name of the key pair. The name must be 2 to 128 characters in length. The name must start with a letter but cannot start with `http://` or `https://`. The name can contain the following characters:
     *
     *   Digits
     *   :
     *   \_
     * You can specify only one name. By default, all key pairs are queried.
     * @example TestKeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The page number of the returned page. Valid values: integers that are greater than 0. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: integers that are greater than 0. Default value: 10.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;
    protected $_name = [
        'keyPairId'   => 'KeyPairId',
        'keyPairName' => 'KeyPairName',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeKeyPairsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
