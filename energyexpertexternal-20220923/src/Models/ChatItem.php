<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class ChatItem extends Model
{
    /**
     * @var string
     */
    public $answer;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var string
     */
    public $folderName;

    /**
     * @var string
     */
    public $question;

    /**
     * @var ChatRefDocItem[]
     */
    public $refDocList;
    protected $_name = [
        'answer' => 'answer',
        'createTime' => 'createTime',
        'folderId' => 'folderId',
        'folderName' => 'folderName',
        'question' => 'question',
        'refDocList' => 'refDocList',
    ];

    public function validate()
    {
        if (\is_array($this->refDocList)) {
            Model::validateArray($this->refDocList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answer) {
            $res['answer'] = $this->answer;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->folderId) {
            $res['folderId'] = $this->folderId;
        }

        if (null !== $this->folderName) {
            $res['folderName'] = $this->folderName;
        }

        if (null !== $this->question) {
            $res['question'] = $this->question;
        }

        if (null !== $this->refDocList) {
            if (\is_array($this->refDocList)) {
                $res['refDocList'] = [];
                $n1 = 0;
                foreach ($this->refDocList as $item1) {
                    $res['refDocList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['answer'])) {
            $model->answer = $map['answer'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['folderId'])) {
            $model->folderId = $map['folderId'];
        }

        if (isset($map['folderName'])) {
            $model->folderName = $map['folderName'];
        }

        if (isset($map['question'])) {
            $model->question = $map['question'];
        }

        if (isset($map['refDocList'])) {
            if (!empty($map['refDocList'])) {
                $model->refDocList = [];
                $n1 = 0;
                foreach ($map['refDocList'] as $item1) {
                    $model->refDocList[$n1] = ChatRefDocItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
