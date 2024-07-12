<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models;

use AlibabaCloud\Tea\Model;

class SearchPunishEventsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $aliUid;

    /**
     * @var string[]
     */
    public $bussinessCodes;

    /**
     * @var string[]
     */
    public $caseCodes;

    /**
     * @var string[]
     */
    public $eventCodes;

    /**
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'aliUid'         => 'AliUid',
        'bussinessCodes' => 'BussinessCodes',
        'caseCodes'      => 'CaseCodes',
        'eventCodes'     => 'EventCodes',
        'resourceId'     => 'ResourceId',
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
        if (null !== $this->bussinessCodes) {
            $res['BussinessCodes'] = $this->bussinessCodes;
        }
        if (null !== $this->caseCodes) {
            $res['CaseCodes'] = $this->caseCodes;
        }
        if (null !== $this->eventCodes) {
            $res['EventCodes'] = $this->eventCodes;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchPunishEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['BussinessCodes'])) {
            if (!empty($map['BussinessCodes'])) {
                $model->bussinessCodes = $map['BussinessCodes'];
            }
        }
        if (isset($map['CaseCodes'])) {
            if (!empty($map['CaseCodes'])) {
                $model->caseCodes = $map['CaseCodes'];
            }
        }
        if (isset($map['EventCodes'])) {
            if (!empty($map['EventCodes'])) {
                $model->eventCodes = $map['EventCodes'];
            }
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
