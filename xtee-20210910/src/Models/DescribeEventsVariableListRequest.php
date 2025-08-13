<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeEventsVariableListRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $createType;

    /**
     * @var string
     */
    public $eventCodes;

    /**
     * @var string
     */
    public $filterDTO;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $scene;
    protected $_name = [
        'lang' => 'Lang',
        'createType' => 'createType',
        'eventCodes' => 'eventCodes',
        'filterDTO' => 'filterDTO',
        'regId' => 'regId',
        'scene' => 'scene',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->createType) {
            $res['createType'] = $this->createType;
        }

        if (null !== $this->eventCodes) {
            $res['eventCodes'] = $this->eventCodes;
        }

        if (null !== $this->filterDTO) {
            $res['filterDTO'] = $this->filterDTO;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['createType'])) {
            $model->createType = $map['createType'];
        }

        if (isset($map['eventCodes'])) {
            $model->eventCodes = $map['eventCodes'];
        }

        if (isset($map['filterDTO'])) {
            $model->filterDTO = $map['filterDTO'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }

        return $model;
    }
}
