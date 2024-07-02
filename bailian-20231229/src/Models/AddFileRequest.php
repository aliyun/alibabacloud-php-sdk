<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class AddFileRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example cate_cdd11b1b79a74e8bbd675c356a91ee3510024405
     *
     * @var string
     */
    public $categoryId;

    /**
     * @description This parameter is required.
     *
     * @example 68abd1dea7b6404d8f7d7b9f7fbd332d.1716698936847
     *
     * @var string
     */
    public $leaseId;

    /**
     * @description This parameter is required.
     *
     * @example DASHSCOPE_DOCMIND
     *
     * @var string
     */
    public $parser;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'leaseId'    => 'LeaseId',
        'parser'     => 'Parser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->leaseId) {
            $res['LeaseId'] = $this->leaseId;
        }
        if (null !== $this->parser) {
            $res['Parser'] = $this->parser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['LeaseId'])) {
            $model->leaseId = $map['LeaseId'];
        }
        if (isset($map['Parser'])) {
            $model->parser = $map['Parser'];
        }

        return $model;
    }
}
