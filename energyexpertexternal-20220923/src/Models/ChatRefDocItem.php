<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class ChatRefDocItem extends Model
{
    /**
     * @var ChatRefDocInfo
     */
    public $docInfo;

    /**
     * @var string
     */
    public $docName;

    /**
     * @var string
     */
    public $docUrl;

    /**
     * @var string
     */
    public $originDocName;

    /**
     * @var string
     */
    public $originDocUrl;

    /**
     * @var ChatDocumentPageNum[]
     */
    public $pageNum;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'docInfo' => 'docInfo',
        'docName' => 'docName',
        'docUrl' => 'docUrl',
        'originDocName' => 'originDocName',
        'originDocUrl' => 'originDocUrl',
        'pageNum' => 'pageNum',
        'sourceType' => 'sourceType',
    ];

    public function validate()
    {
        if (null !== $this->docInfo) {
            $this->docInfo->validate();
        }
        if (\is_array($this->pageNum)) {
            Model::validateArray($this->pageNum);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docInfo) {
            $res['docInfo'] = null !== $this->docInfo ? $this->docInfo->toArray($noStream) : $this->docInfo;
        }

        if (null !== $this->docName) {
            $res['docName'] = $this->docName;
        }

        if (null !== $this->docUrl) {
            $res['docUrl'] = $this->docUrl;
        }

        if (null !== $this->originDocName) {
            $res['originDocName'] = $this->originDocName;
        }

        if (null !== $this->originDocUrl) {
            $res['originDocUrl'] = $this->originDocUrl;
        }

        if (null !== $this->pageNum) {
            if (\is_array($this->pageNum)) {
                $res['pageNum'] = [];
                $n1 = 0;
                foreach ($this->pageNum as $item1) {
                    $res['pageNum'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
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
        if (isset($map['docInfo'])) {
            $model->docInfo = ChatRefDocInfo::fromMap($map['docInfo']);
        }

        if (isset($map['docName'])) {
            $model->docName = $map['docName'];
        }

        if (isset($map['docUrl'])) {
            $model->docUrl = $map['docUrl'];
        }

        if (isset($map['originDocName'])) {
            $model->originDocName = $map['originDocName'];
        }

        if (isset($map['originDocUrl'])) {
            $model->originDocUrl = $map['originDocUrl'];
        }

        if (isset($map['pageNum'])) {
            if (!empty($map['pageNum'])) {
                $model->pageNum = [];
                $n1 = 0;
                foreach ($map['pageNum'] as $item1) {
                    $model->pageNum[$n1] = ChatDocumentPageNum::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        return $model;
    }
}
