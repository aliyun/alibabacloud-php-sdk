<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class RebootRenderingServerRequest extends Model
{
    /**
     * @var string[]
     */
    public $renderingInstanceIds;
    protected $_name = [
        'renderingInstanceIds' => 'RenderingInstanceIds',
    ];

    public function validate()
    {
        if (\is_array($this->renderingInstanceIds)) {
            Model::validateArray($this->renderingInstanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->renderingInstanceIds) {
            if (\is_array($this->renderingInstanceIds)) {
                $res['RenderingInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->renderingInstanceIds as $item1) {
                    $res['RenderingInstanceIds'][$n1] = $item1;
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
        if (isset($map['RenderingInstanceIds'])) {
            if (!empty($map['RenderingInstanceIds'])) {
                $model->renderingInstanceIds = [];
                $n1 = 0;
                foreach ($map['RenderingInstanceIds'] as $item1) {
                    $model->renderingInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
