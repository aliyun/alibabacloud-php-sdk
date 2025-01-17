<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveRecordTemplateRequest\recordFormat;

class UpdateLiveRecordTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var recordFormat[]
     */
    public $recordFormat;
    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'name'         => 'Name',
        'recordFormat' => 'RecordFormat',
        'templateId'   => 'TemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->recordFormat)) {
            Model::validateArray($this->recordFormat);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->recordFormat) {
            if (\is_array($this->recordFormat)) {
                $res['RecordFormat'] = [];
                $n1                  = 0;
                foreach ($this->recordFormat as $item1) {
                    $res['RecordFormat'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RecordFormat'])) {
            if (!empty($map['RecordFormat'])) {
                $model->recordFormat = [];
                $n1                  = 0;
                foreach ($map['RecordFormat'] as $item1) {
                    $model->recordFormat[$n1++] = recordFormat::fromMap($item1);
                }
            }
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
