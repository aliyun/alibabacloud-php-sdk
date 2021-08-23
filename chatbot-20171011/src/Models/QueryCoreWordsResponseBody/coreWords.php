<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryCoreWordsResponseBody;

use AlibabaCloud\Tea\Model;

class coreWords extends Model
{
    /**
     * @var string
     */
    public $coreWordCode;

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
    public $createTime;

    /**
     * @var string
     */
    public $modifyTime;
    protected $_name = [
        'coreWordCode' => 'CoreWordCode',
        'coreWordName' => 'CoreWordName',
        'synonyms'     => 'Synonyms',
        'createTime'   => 'CreateTime',
        'modifyTime'   => 'ModifyTime',
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
        if (null !== $this->synonyms) {
            $res['Synonyms'] = $this->synonyms;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coreWords
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
        if (isset($map['Synonyms'])) {
            if (!empty($map['Synonyms'])) {
                $model->synonyms = $map['Synonyms'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
