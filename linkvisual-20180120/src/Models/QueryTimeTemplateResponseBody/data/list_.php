<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryTimeTemplateResponseBody\data;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryTimeTemplateResponseBody\data\list_\timeSectionList;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $allDay;

    /**
     * @example 1
     *
     * @var int
     */
    public $default;

    /**
     * @example exampleName
     *
     * @var string
     */
    public $name;

    /**
     * @example adxxx
     *
     * @var string
     */
    public $templateId;

    /**
     * @var timeSectionList[]
     */
    public $timeSectionList;
    protected $_name = [
        'allDay'          => 'AllDay',
        'default'         => 'Default',
        'name'            => 'Name',
        'templateId'      => 'TemplateId',
        'timeSectionList' => 'TimeSectionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allDay) {
            $res['AllDay'] = $this->allDay;
        }
        if (null !== $this->default) {
            $res['Default'] = $this->default;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->timeSectionList) {
            $res['TimeSectionList'] = [];
            if (null !== $this->timeSectionList && \is_array($this->timeSectionList)) {
                $n = 0;
                foreach ($this->timeSectionList as $item) {
                    $res['TimeSectionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllDay'])) {
            $model->allDay = $map['AllDay'];
        }
        if (isset($map['Default'])) {
            $model->default = $map['Default'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TimeSectionList'])) {
            if (!empty($map['TimeSectionList'])) {
                $model->timeSectionList = [];
                $n                      = 0;
                foreach ($map['TimeSectionList'] as $item) {
                    $model->timeSectionList[$n++] = null !== $item ? timeSectionList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
