<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\UpdateTimeTemplateRequest\timeSections;
use AlibabaCloud\Tea\Model;

class UpdateTimeTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $allDay;

    /**
     * @var timeSections[]
     */
    public $timeSections;
    protected $_name = [
        'apiProduct'   => 'ApiProduct',
        'apiRevision'  => 'ApiRevision',
        'templateId'   => 'TemplateId',
        'name'         => 'Name',
        'allDay'       => 'AllDay',
        'timeSections' => 'TimeSections',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->allDay) {
            $res['AllDay'] = $this->allDay;
        }
        if (null !== $this->timeSections) {
            $res['TimeSections'] = [];
            if (null !== $this->timeSections && \is_array($this->timeSections)) {
                $n = 0;
                foreach ($this->timeSections as $item) {
                    $res['TimeSections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTimeTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['AllDay'])) {
            $model->allDay = $map['AllDay'];
        }
        if (isset($map['TimeSections'])) {
            if (!empty($map['TimeSections'])) {
                $model->timeSections = [];
                $n                   = 0;
                foreach ($map['TimeSections'] as $item) {
                    $model->timeSections[$n++] = null !== $item ? timeSections::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
