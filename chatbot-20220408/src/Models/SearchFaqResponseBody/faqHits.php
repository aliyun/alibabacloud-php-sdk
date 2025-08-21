<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\SearchFaqResponseBody;

use AlibabaCloud\Dara\Model;

class faqHits extends Model
{
    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createUserId;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var int
     */
    public $effectStatus;

    /**
     * @var string[]
     */
    public $hitSimilarTitles;

    /**
     * @var string[]
     */
    public $hitSolutions;

    /**
     * @var int
     */
    public $knowledgeId;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var int
     */
    public $modifyUserId;

    /**
     * @var string
     */
    public $modifyUserName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'createTime' => 'CreateTime',
        'createUserId' => 'CreateUserId',
        'createUserName' => 'CreateUserName',
        'effectStatus' => 'EffectStatus',
        'hitSimilarTitles' => 'HitSimilarTitles',
        'hitSolutions' => 'HitSolutions',
        'knowledgeId' => 'KnowledgeId',
        'modifyTime' => 'ModifyTime',
        'modifyUserId' => 'ModifyUserId',
        'modifyUserName' => 'ModifyUserName',
        'status' => 'Status',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->hitSimilarTitles)) {
            Model::validateArray($this->hitSimilarTitles);
        }
        if (\is_array($this->hitSolutions)) {
            Model::validateArray($this->hitSolutions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }

        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }

        if (null !== $this->effectStatus) {
            $res['EffectStatus'] = $this->effectStatus;
        }

        if (null !== $this->hitSimilarTitles) {
            if (\is_array($this->hitSimilarTitles)) {
                $res['HitSimilarTitles'] = [];
                $n1 = 0;
                foreach ($this->hitSimilarTitles as $item1) {
                    $res['HitSimilarTitles'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hitSolutions) {
            if (\is_array($this->hitSolutions)) {
                $res['HitSolutions'] = [];
                $n1 = 0;
                foreach ($this->hitSolutions as $item1) {
                    $res['HitSolutions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->modifyUserId) {
            $res['ModifyUserId'] = $this->modifyUserId;
        }

        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }

        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }

        if (isset($map['EffectStatus'])) {
            $model->effectStatus = $map['EffectStatus'];
        }

        if (isset($map['HitSimilarTitles'])) {
            if (!empty($map['HitSimilarTitles'])) {
                $model->hitSimilarTitles = [];
                $n1 = 0;
                foreach ($map['HitSimilarTitles'] as $item1) {
                    $model->hitSimilarTitles[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HitSolutions'])) {
            if (!empty($map['HitSolutions'])) {
                $model->hitSolutions = [];
                $n1 = 0;
                foreach ($map['HitSolutions'] as $item1) {
                    $model->hitSolutions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['ModifyUserId'])) {
            $model->modifyUserId = $map['ModifyUserId'];
        }

        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
