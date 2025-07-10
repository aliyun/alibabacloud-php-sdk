<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class ExportOASRequest extends Model
{
    /**
     * @var string[]
     */
    public $apiIdList;

    /**
     * @var string
     */
    public $dataFormat;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $oasVersion;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $stageName;

    /**
     * @var bool
     */
    public $withXExtensions;
    protected $_name = [
        'apiIdList' => 'ApiIdList',
        'dataFormat' => 'DataFormat',
        'groupId' => 'GroupId',
        'oasVersion' => 'OasVersion',
        'pageNumber' => 'PageNumber',
        'securityToken' => 'SecurityToken',
        'stageName' => 'StageName',
        'withXExtensions' => 'WithXExtensions',
    ];

    public function validate()
    {
        if (\is_array($this->apiIdList)) {
            Model::validateArray($this->apiIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiIdList) {
            if (\is_array($this->apiIdList)) {
                $res['ApiIdList'] = [];
                $n1 = 0;
                foreach ($this->apiIdList as $item1) {
                    $res['ApiIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->oasVersion) {
            $res['OasVersion'] = $this->oasVersion;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }

        if (null !== $this->withXExtensions) {
            $res['WithXExtensions'] = $this->withXExtensions;
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
        if (isset($map['ApiIdList'])) {
            if (!empty($map['ApiIdList'])) {
                $model->apiIdList = [];
                $n1 = 0;
                foreach ($map['ApiIdList'] as $item1) {
                    $model->apiIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['OasVersion'])) {
            $model->oasVersion = $map['OasVersion'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        if (isset($map['WithXExtensions'])) {
            $model->withXExtensions = $map['WithXExtensions'];
        }

        return $model;
    }
}
