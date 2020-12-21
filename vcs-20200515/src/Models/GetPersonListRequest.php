<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class GetPersonListRequest extends Model
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
     * @var mixed[]
     */
    public $corpIdList;

    /**
     * @var string
     */
    public $faceMatchingRateThreshold;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var mixed[]
     */
    public $personIdList;
    protected $_name = [
        'pageNumber'                => 'PageNumber',
        'pageSize'                  => 'PageSize',
        'faceUrl'                   => 'FaceUrl',
        'corpIdList'                => 'CorpIdList',
        'faceMatchingRateThreshold' => 'FaceMatchingRateThreshold',
        'corpId'                    => 'CorpId',
        'personIdList'              => 'PersonIdList',
    ];

    public function validate()
    {
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
        if (null !== $this->corpIdList) {
            $res['CorpIdList'] = $this->corpIdList;
        }
        if (null !== $this->faceMatchingRateThreshold) {
            $res['FaceMatchingRateThreshold'] = $this->faceMatchingRateThreshold;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->personIdList) {
            $res['PersonIdList'] = $this->personIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPersonListRequest
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
            $model->corpIdList = $map['CorpIdList'];
        }
        if (isset($map['FaceMatchingRateThreshold'])) {
            $model->faceMatchingRateThreshold = $map['FaceMatchingRateThreshold'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['PersonIdList'])) {
            $model->personIdList = $map['PersonIdList'];
        }

        return $model;
    }
}
