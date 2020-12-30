<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdc\V20180821\Models;

use AlibabaCloud\Tea\Model;

class SearchTestCaseRequest extends Model
{
    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $corpIdentifier;

    /**
     * @var string
     */
    public $akProjectId;

    /**
     * @var string
     */
    public $caseTag;

    /**
     * @var string
     */
    public $pageNum;

    /**
     * @var string
     */
    public $createDateStart;

    /**
     * @var string
     */
    public $createDateEnd;

    /**
     * @var string
     */
    public $updateDateStart;

    /**
     * @var string
     */
    public $updateDateEnd;
    protected $_name = [
        'pageSize'        => 'PageSize',
        'corpIdentifier'  => 'CorpIdentifier',
        'akProjectId'     => 'AkProjectId',
        'caseTag'         => 'CaseTag',
        'pageNum'         => 'PageNum',
        'createDateStart' => 'CreateDateStart',
        'createDateEnd'   => 'CreateDateEnd',
        'updateDateStart' => 'UpdateDateStart',
        'updateDateEnd'   => 'UpdateDateEnd',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->corpIdentifier) {
            $res['CorpIdentifier'] = $this->corpIdentifier;
        }
        if (null !== $this->akProjectId) {
            $res['AkProjectId'] = $this->akProjectId;
        }
        if (null !== $this->caseTag) {
            $res['CaseTag'] = $this->caseTag;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->createDateStart) {
            $res['CreateDateStart'] = $this->createDateStart;
        }
        if (null !== $this->createDateEnd) {
            $res['CreateDateEnd'] = $this->createDateEnd;
        }
        if (null !== $this->updateDateStart) {
            $res['UpdateDateStart'] = $this->updateDateStart;
        }
        if (null !== $this->updateDateEnd) {
            $res['UpdateDateEnd'] = $this->updateDateEnd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchTestCaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CorpIdentifier'])) {
            $model->corpIdentifier = $map['CorpIdentifier'];
        }
        if (isset($map['AkProjectId'])) {
            $model->akProjectId = $map['AkProjectId'];
        }
        if (isset($map['CaseTag'])) {
            $model->caseTag = $map['CaseTag'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['CreateDateStart'])) {
            $model->createDateStart = $map['CreateDateStart'];
        }
        if (isset($map['CreateDateEnd'])) {
            $model->createDateEnd = $map['CreateDateEnd'];
        }
        if (isset($map['UpdateDateStart'])) {
            $model->updateDateStart = $map['UpdateDateStart'];
        }
        if (isset($map['UpdateDateEnd'])) {
            $model->updateDateEnd = $map['UpdateDateEnd'];
        }

        return $model;
    }
}
