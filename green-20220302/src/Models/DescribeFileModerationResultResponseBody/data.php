<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageResult;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageSummary;

class data extends Model
{
    /**
     * @var string
     */
    public $dataId;
    /**
     * @var string
     */
    public $docType;
    /**
     * @var pageResult[]
     */
    public $pageResult;
    /**
     * @var pageSummary
     */
    public $pageSummary;
    /**
     * @var string
     */
    public $riskLevel;
    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'dataId'      => 'DataId',
        'docType'     => 'DocType',
        'pageResult'  => 'PageResult',
        'pageSummary' => 'PageSummary',
        'riskLevel'   => 'RiskLevel',
        'url'         => 'Url',
    ];

    public function validate()
    {
        if (\is_array($this->pageResult)) {
            Model::validateArray($this->pageResult);
        }
        if (null !== $this->pageSummary) {
            $this->pageSummary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }

        if (null !== $this->pageResult) {
            if (\is_array($this->pageResult)) {
                $res['PageResult'] = [];
                $n1                = 0;
                foreach ($this->pageResult as $item1) {
                    $res['PageResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageSummary) {
            $res['PageSummary'] = null !== $this->pageSummary ? $this->pageSummary->toArray($noStream) : $this->pageSummary;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }

        if (isset($map['PageResult'])) {
            if (!empty($map['PageResult'])) {
                $model->pageResult = [];
                $n1                = 0;
                foreach ($map['PageResult'] as $item1) {
                    $model->pageResult[$n1++] = pageResult::fromMap($item1);
                }
            }
        }

        if (isset($map['PageSummary'])) {
            $model->pageSummary = pageSummary::fromMap($map['PageSummary']);
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
