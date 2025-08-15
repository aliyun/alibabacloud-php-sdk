<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ListMaterialDocumentsRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $createTimeEnd;

    /**
     * @var string
     */
    public $createTimeStart;

    /**
     * @var int
     */
    public $current;

    /**
     * @var string
     */
    public $docType;

    /**
     * @var string[]
     */
    public $docTypeList;

    /**
     * @var bool
     */
    public $generatePublicUrl;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string[]
     */
    public $keywords;

    /**
     * @var string
     */
    public $query;

    /**
     * @var int
     */
    public $shareAttr;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $updateTimeEnd;

    /**
     * @var string
     */
    public $updateTimeStart;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'content' => 'Content',
        'createTimeEnd' => 'CreateTimeEnd',
        'createTimeStart' => 'CreateTimeStart',
        'current' => 'Current',
        'docType' => 'DocType',
        'docTypeList' => 'DocTypeList',
        'generatePublicUrl' => 'GeneratePublicUrl',
        'id' => 'Id',
        'keywords' => 'Keywords',
        'query' => 'Query',
        'shareAttr' => 'ShareAttr',
        'size' => 'Size',
        'title' => 'Title',
        'updateTimeEnd' => 'UpdateTimeEnd',
        'updateTimeStart' => 'UpdateTimeStart',
    ];

    public function validate()
    {
        if (\is_array($this->docTypeList)) {
            Model::validateArray($this->docTypeList);
        }
        if (\is_array($this->keywords)) {
            Model::validateArray($this->keywords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->createTimeEnd) {
            $res['CreateTimeEnd'] = $this->createTimeEnd;
        }

        if (null !== $this->createTimeStart) {
            $res['CreateTimeStart'] = $this->createTimeStart;
        }

        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }

        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }

        if (null !== $this->docTypeList) {
            if (\is_array($this->docTypeList)) {
                $res['DocTypeList'] = [];
                $n1 = 0;
                foreach ($this->docTypeList as $item1) {
                    $res['DocTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->generatePublicUrl) {
            $res['GeneratePublicUrl'] = $this->generatePublicUrl;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->keywords) {
            if (\is_array($this->keywords)) {
                $res['Keywords'] = [];
                $n1 = 0;
                foreach ($this->keywords as $item1) {
                    $res['Keywords'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->shareAttr) {
            $res['ShareAttr'] = $this->shareAttr;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->updateTimeEnd) {
            $res['UpdateTimeEnd'] = $this->updateTimeEnd;
        }

        if (null !== $this->updateTimeStart) {
            $res['UpdateTimeStart'] = $this->updateTimeStart;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['CreateTimeEnd'])) {
            $model->createTimeEnd = $map['CreateTimeEnd'];
        }

        if (isset($map['CreateTimeStart'])) {
            $model->createTimeStart = $map['CreateTimeStart'];
        }

        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }

        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }

        if (isset($map['DocTypeList'])) {
            if (!empty($map['DocTypeList'])) {
                $model->docTypeList = [];
                $n1 = 0;
                foreach ($map['DocTypeList'] as $item1) {
                    $model->docTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GeneratePublicUrl'])) {
            $model->generatePublicUrl = $map['GeneratePublicUrl'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Keywords'])) {
            if (!empty($map['Keywords'])) {
                $model->keywords = [];
                $n1 = 0;
                foreach ($map['Keywords'] as $item1) {
                    $model->keywords[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['ShareAttr'])) {
            $model->shareAttr = $map['ShareAttr'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['UpdateTimeEnd'])) {
            $model->updateTimeEnd = $map['UpdateTimeEnd'];
        }

        if (isset($map['UpdateTimeStart'])) {
            $model->updateTimeStart = $map['UpdateTimeStart'];
        }

        return $model;
    }
}
