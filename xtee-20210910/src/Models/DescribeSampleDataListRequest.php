<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeSampleDataListRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $deleteTag;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $queryContent;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var int
     */
    public $sampleId;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'lang'         => 'Lang',
        'currentPage'  => 'currentPage',
        'deleteTag'    => 'deleteTag',
        'pageSize'     => 'pageSize',
        'queryContent' => 'queryContent',
        'regId'        => 'regId',
        'sampleId'     => 'sampleId',
        'scene'        => 'scene',
        'status'       => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }
        if (null !== $this->deleteTag) {
            $res['deleteTag'] = $this->deleteTag;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->queryContent) {
            $res['queryContent'] = $this->queryContent;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->sampleId) {
            $res['sampleId'] = $this->sampleId;
        }
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSampleDataListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }
        if (isset($map['deleteTag'])) {
            $model->deleteTag = $map['deleteTag'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['queryContent'])) {
            $model->queryContent = $map['queryContent'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['sampleId'])) {
            $model->sampleId = $map['sampleId'];
        }
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
