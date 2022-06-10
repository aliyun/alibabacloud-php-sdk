<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\SearchFaqResponseBody;

use AlibabaCloud\Tea\Model;

class faqHits extends Model
{
    /**
     * @description 类目ID
     *
     * @var int
     */
    public $categoryId;

    /**
     * @description 创建时间（UTC时间）
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 创建人ID
     *
     * @var int
     */
    public $createUserId;

    /**
     * @description 创建人
     *
     * @var string
     */
    public $createUserName;

    /**
     * @description 知识生效状态,根据StartDate, EndDate计算出来: 20-生效中, 21-已失效, 22-待生效
     *
     * @var int
     */
    public $effectStatus;

    /**
     * @description 命中的相似问
     *
     * @var string[]
     */
    public $hitSimilarTitles;

    /**
     * @description 命中的答案
     *
     * @var string[]
     */
    public $hitSolutions;

    /**
     * @description 知识ID
     *
     * @var int
     */
    public $knowledgeId;

    /**
     * @description 修改时间（UTC时间）
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description 修改人ID
     *
     * @var int
     */
    public $modifyUserId;

    /**
     * @description 修改人
     *
     * @var string
     */
    public $modifyUserName;

    /**
     * @description 知识状态: -1-已删除未发布, 1-未发布, 2-已发布, 3-已更新未发布
     *
     * @var int
     */
    public $status;

    /**
     * @description 标题
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'categoryId'       => 'CategoryId',
        'createTime'       => 'CreateTime',
        'createUserId'     => 'CreateUserId',
        'createUserName'   => 'CreateUserName',
        'effectStatus'     => 'EffectStatus',
        'hitSimilarTitles' => 'HitSimilarTitles',
        'hitSolutions'     => 'HitSolutions',
        'knowledgeId'      => 'KnowledgeId',
        'modifyTime'       => 'ModifyTime',
        'modifyUserId'     => 'ModifyUserId',
        'modifyUserName'   => 'ModifyUserName',
        'status'           => 'Status',
        'title'            => 'Title',
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
            $res['HitSimilarTitles'] = $this->hitSimilarTitles;
        }
        if (null !== $this->hitSolutions) {
            $res['HitSolutions'] = $this->hitSolutions;
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

    /**
     * @param array $map
     *
     * @return faqHits
     */
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
                $model->hitSimilarTitles = $map['HitSimilarTitles'];
            }
        }
        if (isset($map['HitSolutions'])) {
            if (!empty($map['HitSolutions'])) {
                $model->hitSolutions = $map['HitSolutions'];
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
