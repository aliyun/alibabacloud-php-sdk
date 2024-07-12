<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models;

use AlibabaCloud\Tea\Model;

class SearchPunishEventsShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $bussinessCodesShrink;

    /**
     * @var string
     */
    public $caseCodesShrink;

    /**
     * @var string
     */
    public $eventCodesShrink;

    /**
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'aliUid'               => 'AliUid',
        'bussinessCodesShrink' => 'BussinessCodes',
        'caseCodesShrink'      => 'CaseCodes',
        'eventCodesShrink'     => 'EventCodes',
        'resourceId'           => 'ResourceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->bussinessCodesShrink) {
            $res['BussinessCodes'] = $this->bussinessCodesShrink;
        }
        if (null !== $this->caseCodesShrink) {
            $res['CaseCodes'] = $this->caseCodesShrink;
        }
        if (null !== $this->eventCodesShrink) {
            $res['EventCodes'] = $this->eventCodesShrink;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchPunishEventsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['BussinessCodes'])) {
            $model->bussinessCodesShrink = $map['BussinessCodes'];
        }
        if (isset($map['CaseCodes'])) {
            $model->caseCodesShrink = $map['CaseCodes'];
        }
        if (isset($map['EventCodes'])) {
            $model->eventCodesShrink = $map['EventCodes'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
