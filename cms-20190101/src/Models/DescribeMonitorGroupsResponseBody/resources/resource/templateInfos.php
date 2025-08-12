<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsResponseBody\resources\resource;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupsResponseBody\resources\resource\templateInfos\templateInfo;

class templateInfos extends Model
{
    /**
     * @var templateInfo[]
     */
    public $templateInfo;
    protected $_name = [
        'templateInfo' => 'TemplateInfo',
    ];

    public function validate()
    {
        if (\is_array($this->templateInfo)) {
            Model::validateArray($this->templateInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->templateInfo) {
            if (\is_array($this->templateInfo)) {
                $res['TemplateInfo'] = [];
                $n1 = 0;
                foreach ($this->templateInfo as $item1) {
                    $res['TemplateInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TemplateInfo'])) {
            if (!empty($map['TemplateInfo'])) {
                $model->templateInfo = [];
                $n1 = 0;
                foreach ($map['TemplateInfo'] as $item1) {
                    $model->templateInfo[$n1] = templateInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
