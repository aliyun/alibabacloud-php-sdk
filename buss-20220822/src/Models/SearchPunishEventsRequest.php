<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models;

use AlibabaCloud\Dara\Model;

class SearchPunishEventsRequest extends Model
{
    /**
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
        'aliUid' => 'AliUid',
        'bussinessCodes' => 'BussinessCodes',
        'caseCodes' => 'CaseCodes',
        'eventCodes' => 'EventCodes',
        'resourceId' => 'ResourceId',
    ];

    public function validate()
    {
        if (\is_array($this->bussinessCodes)) {
            Model::validateArray($this->bussinessCodes);
        }
        if (\is_array($this->caseCodes)) {
            Model::validateArray($this->caseCodes);
        }
        if (\is_array($this->eventCodes)) {
            Model::validateArray($this->eventCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->bussinessCodes) {
            if (\is_array($this->bussinessCodes)) {
                $res['BussinessCodes'] = [];
                $n1 = 0;
                foreach ($this->bussinessCodes as $item1) {
                    $res['BussinessCodes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->caseCodes) {
            if (\is_array($this->caseCodes)) {
                $res['CaseCodes'] = [];
                $n1 = 0;
                foreach ($this->caseCodes as $item1) {
                    $res['CaseCodes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->eventCodes) {
            if (\is_array($this->eventCodes)) {
                $res['EventCodes'] = [];
                $n1 = 0;
                foreach ($this->eventCodes as $item1) {
                    $res['EventCodes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['BussinessCodes'])) {
            if (!empty($map['BussinessCodes'])) {
                $model->bussinessCodes = [];
                $n1 = 0;
                foreach ($map['BussinessCodes'] as $item1) {
                    $model->bussinessCodes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CaseCodes'])) {
            if (!empty($map['CaseCodes'])) {
                $model->caseCodes = [];
                $n1 = 0;
                foreach ($map['CaseCodes'] as $item1) {
                    $model->caseCodes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EventCodes'])) {
            if (!empty($map['EventCodes'])) {
                $model->eventCodes = [];
                $n1 = 0;
                foreach ($map['EventCodes'] as $item1) {
                    $model->eventCodes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
