<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class DescribeCoreWordResponseBody extends Model
{
    /**
     * @var string
     */
    public $coreWordName;

    /**
     * @var string[]
     */
    public $synonyms;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $coreWordCode;
    protected $_name = [
        'coreWordName' => 'CoreWordName',
        'synonyms'     => 'Synonyms',
        'modifyTime'   => 'ModifyTime',
        'requestId'    => 'RequestId',
        'createTime'   => 'CreateTime',
        'coreWordCode' => 'CoreWordCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coreWordName) {
            $res['CoreWordName'] = $this->coreWordName;
        }
        if (null !== $this->synonyms) {
            $res['Synonyms'] = $this->synonyms;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->coreWordCode) {
            $res['CoreWordCode'] = $this->coreWordCode;
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
        if (isset($map['CoreWordName'])) {
            $model->coreWordName = $map['CoreWordName'];
        }
        if (isset($map['Synonyms'])) {
            if (!empty($map['Synonyms'])) {
                $model->synonyms = $map['Synonyms'];
            }
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CoreWordCode'])) {
            $model->coreWordCode = $map['CoreWordCode'];
        }

        return $model;
    }
}
