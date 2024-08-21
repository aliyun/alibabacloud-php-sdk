<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class ListCsrRequest extends Model
{
    /**
     * @description The algorithm. Valid values: RSA, ECC, and SM2.
     *
     * @example RSA
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The keyword.
     *
     * @example test_name
     *
     * @var string
     */
    public $keyWord;

    /**
     * @description The number of entries per page. Default value: 50.
     *
     * @example 10
     *
     * @var int
     */
    public $showSize;
    protected $_name = [
        'algorithm'   => 'Algorithm',
        'currentPage' => 'CurrentPage',
        'keyWord'     => 'KeyWord',
        'showSize'    => 'ShowSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
        }
        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCsrRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
        }
        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }

        return $model;
    }
}
