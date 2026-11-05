<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawSkillTemplateResponseBody\skillTemplates;

class DescribePolarClawSkillTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var skillTemplates[]
     */
    public $skillTemplates;
    protected $_name = [
        'requestId' => 'RequestId',
        'skillTemplates' => 'SkillTemplates',
    ];

    public function validate()
    {
        if (\is_array($this->skillTemplates)) {
            Model::validateArray($this->skillTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->skillTemplates) {
            if (\is_array($this->skillTemplates)) {
                $res['SkillTemplates'] = [];
                $n1 = 0;
                foreach ($this->skillTemplates as $item1) {
                    $res['SkillTemplates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SkillTemplates'])) {
            if (!empty($map['SkillTemplates'])) {
                $model->skillTemplates = [];
                $n1 = 0;
                foreach ($map['SkillTemplates'] as $item1) {
                    $model->skillTemplates[$n1] = skillTemplates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
