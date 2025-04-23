<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobTemplatesResponseBody\templates\jobTemplates;

class templates extends Model
{
    /**
     * @var jobTemplates[]
     */
    public $jobTemplates;
    protected $_name = [
        'jobTemplates' => 'JobTemplates',
    ];

    public function validate()
    {
        if (\is_array($this->jobTemplates)) {
            Model::validateArray($this->jobTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobTemplates) {
            if (\is_array($this->jobTemplates)) {
                $res['JobTemplates'] = [];
                $n1 = 0;
                foreach ($this->jobTemplates as $item1) {
                    $res['JobTemplates'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['JobTemplates'])) {
            if (!empty($map['JobTemplates'])) {
                $model->jobTemplates = [];
                $n1 = 0;
                foreach ($map['JobTemplates'] as $item1) {
                    $model->jobTemplates[$n1++] = jobTemplates::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
