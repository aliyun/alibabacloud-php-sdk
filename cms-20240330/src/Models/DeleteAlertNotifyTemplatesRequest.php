<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DeleteAlertNotifyTemplatesRequest extends Model
{
    /**
     * @var string[]
     */
    public $alertNotifyTemplateIds;
    protected $_name = [
        'alertNotifyTemplateIds' => 'alertNotifyTemplateIds',
    ];

    public function validate()
    {
        if (\is_array($this->alertNotifyTemplateIds)) {
            Model::validateArray($this->alertNotifyTemplateIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertNotifyTemplateIds) {
            if (\is_array($this->alertNotifyTemplateIds)) {
                $res['alertNotifyTemplateIds'] = [];
                $n1 = 0;
                foreach ($this->alertNotifyTemplateIds as $item1) {
                    $res['alertNotifyTemplateIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['alertNotifyTemplateIds'])) {
            if (!empty($map['alertNotifyTemplateIds'])) {
                $model->alertNotifyTemplateIds = [];
                $n1 = 0;
                foreach ($map['alertNotifyTemplateIds'] as $item1) {
                    $model->alertNotifyTemplateIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
