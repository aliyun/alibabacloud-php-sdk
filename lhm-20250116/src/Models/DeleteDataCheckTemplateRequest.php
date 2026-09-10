<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class DeleteDataCheckTemplateRequest extends Model
{
    /**
     * @var string[]
     */
    public $templateIds;
    protected $_name = [
        'templateIds' => 'templateIds',
    ];

    public function validate()
    {
        if (\is_array($this->templateIds)) {
            Model::validateArray($this->templateIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->templateIds) {
            if (\is_array($this->templateIds)) {
                $res['templateIds'] = [];
                $n1 = 0;
                foreach ($this->templateIds as $item1) {
                    $res['templateIds'][$n1] = $item1;
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
        if (isset($map['templateIds'])) {
            if (!empty($map['templateIds'])) {
                $model->templateIds = [];
                $n1 = 0;
                foreach ($map['templateIds'] as $item1) {
                    $model->templateIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
