<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class GetPersonListShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $faceUrl;

    /**
     * @var string
     */
    public $corpIdListShrink;

    /**
     * @var string
     */
    public $faceMatchingRateThreshold;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $personIdListShrink;
    protected $_name = [
        'pageNumber'                => 'PageNumber',
        'pageSize'                  => 'PageSize',
        'faceUrl'                   => 'FaceUrl',
        'corpIdListShrink'          => 'CorpIdList',
        'faceMatchingRateThreshold' => 'FaceMatchingRateThreshold',
        'corpId'                    => 'CorpId',
        'personIdListShrink'        => 'PersonIdList',
    ];

    public function validate()
    {
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->faceUrl) {
            $res['FaceUrl'] = $this->faceUrl;
        }
        if (null !== $this->corpIdListShrink) {
            $res['CorpIdList'] = $this->corpIdListShrink;
        }
        if (null !== $this->faceMatchingRateThreshold) {
            $res['FaceMatchingRateThreshold'] = $this->faceMatchingRateThreshold;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->personIdListShrink) {
            $res['PersonIdList'] = $this->personIdListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPersonListShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['FaceUrl'])) {
            $model->faceUrl = $map['FaceUrl'];
        }
        if (isset($map['CorpIdList'])) {
            $model->corpIdListShrink = $map['CorpIdList'];
        }
        if (isset($map['FaceMatchingRateThreshold'])) {
            $model->faceMatchingRateThreshold = $map['FaceMatchingRateThreshold'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['PersonIdList'])) {
            $model->personIdListShrink = $map['PersonIdList'];
        }

        return $model;
    }
}
