<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryKnowledgesResponseBody;

use AlibabaCloud\Tea\Model;

class knowledges extends Model
{
    /**
     * @var int
     */
    public $knowledgeStatus;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $knowledgeId;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $knowledgeTitle;

    /**
     * @var string
     */
    public $modifyUserName;

    /**
     * @var string[]
     */
    public $coreWords;

    /**
     * @var string
     */
    public $version;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $modifyTime;
    protected $_name = [
        'knowledgeStatus' => 'KnowledgeStatus',
        'endDate'         => 'EndDate',
        'knowledgeId'     => 'KnowledgeId',
        'createUserName'  => 'CreateUserName',
        'createTime'      => 'CreateTime',
        'startDate'       => 'StartDate',
        'knowledgeTitle'  => 'KnowledgeTitle',
        'modifyUserName'  => 'ModifyUserName',
        'coreWords'       => 'CoreWords',
        'version'         => 'Version',
        'categoryId'      => 'CategoryId',
        'modifyTime'      => 'ModifyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->knowledgeStatus) {
            $res['KnowledgeStatus'] = $this->knowledgeStatus;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->knowledgeTitle) {
            $res['KnowledgeTitle'] = $this->knowledgeTitle;
        }
        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }
        if (null !== $this->coreWords) {
            $res['CoreWords'] = $this->coreWords;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return knowledges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KnowledgeStatus'])) {
            $model->knowledgeStatus = $map['KnowledgeStatus'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['KnowledgeTitle'])) {
            $model->knowledgeTitle = $map['KnowledgeTitle'];
        }
        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }
        if (isset($map['CoreWords'])) {
            if (!empty($map['CoreWords'])) {
                $model->coreWords = $map['CoreWords'];
            }
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
