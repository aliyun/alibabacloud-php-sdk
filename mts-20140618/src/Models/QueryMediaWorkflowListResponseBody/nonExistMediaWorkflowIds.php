<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaWorkflowListResponseBody;

use AlibabaCloud\Dara\Model;

class nonExistMediaWorkflowIds extends Model
{
    /**
     * @var string[]
     */
    public $mediaWorkflowId;
    protected $_name = [
        'mediaWorkflowId' => 'MediaWorkflowId',
    ];

    public function validate()
    {
        if (\is_array($this->mediaWorkflowId)) {
            Model::validateArray($this->mediaWorkflowId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaWorkflowId) {
            if (\is_array($this->mediaWorkflowId)) {
                $res['MediaWorkflowId'] = [];
                $n1 = 0;
                foreach ($this->mediaWorkflowId as $item1) {
                    $res['MediaWorkflowId'][$n1++] = $item1;
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
        if (isset($map['MediaWorkflowId'])) {
            if (!empty($map['MediaWorkflowId'])) {
                $model->mediaWorkflowId = [];
                $n1 = 0;
                foreach ($map['MediaWorkflowId'] as $item1) {
                    $model->mediaWorkflowId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
