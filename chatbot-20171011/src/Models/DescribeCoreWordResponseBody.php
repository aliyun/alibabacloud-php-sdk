<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class DescribeCoreWordResponseBody extends Model
{
    /**
     * @example 5be359c7-c18b-353a-bfe5-659b229e272e
     *
     * @var string
     */
    public $coreWordCode;

    /**
     * @var string
     */
    public $coreWordName;

    /**
     * @example 2020-11-24T03:49:18Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2020-11-25T10:31:10Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example F55D90C1-31BE-4B2A-AA3F-25EFC36F9419
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $synonyms;
    protected $_name = [
        'coreWordCode' => 'CoreWordCode',
        'coreWordName' => 'CoreWordName',
        'createTime'   => 'CreateTime',
        'modifyTime'   => 'ModifyTime',
        'requestId'    => 'RequestId',
        'synonyms'     => 'Synonyms',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coreWordCode) {
            $res['CoreWordCode'] = $this->coreWordCode;
        }
        if (null !== $this->coreWordName) {
            $res['CoreWordName'] = $this->coreWordName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->synonyms) {
            $res['Synonyms'] = $this->synonyms;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCoreWordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoreWordCode'])) {
            $model->coreWordCode = $map['CoreWordCode'];
        }
        if (isset($map['CoreWordName'])) {
            $model->coreWordName = $map['CoreWordName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Synonyms'])) {
            if (!empty($map['Synonyms'])) {
                $model->synonyms = $map['Synonyms'];
            }
        }

        return $model;
    }
}
