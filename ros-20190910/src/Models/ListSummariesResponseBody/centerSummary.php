<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListSummariesResponseBody;

use AlibabaCloud\Dara\Model;

class centerSummary extends Model
{
    /**
     * @var int
     */
    public $registeredResourceTypeCount;

    /**
     * @var string
     */
    public $templateCount;
    protected $_name = [
        'registeredResourceTypeCount' => 'RegisteredResourceTypeCount',
        'templateCount' => 'TemplateCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->registeredResourceTypeCount) {
            $res['RegisteredResourceTypeCount'] = $this->registeredResourceTypeCount;
        }

        if (null !== $this->templateCount) {
            $res['TemplateCount'] = $this->templateCount;
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
        if (isset($map['RegisteredResourceTypeCount'])) {
            $model->registeredResourceTypeCount = $map['RegisteredResourceTypeCount'];
        }

        if (isset($map['TemplateCount'])) {
            $model->templateCount = $map['TemplateCount'];
        }

        return $model;
    }
}
