<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OssAgent\V20260622\Models\GetSessionContentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OssAgent\V20260622\Models\GetSessionContentResponseBody\content\agentContents;

class content extends Model
{
    /**
     * @var agentContents[]
     */
    public $agentContents;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var bool
     */
    public $toolConfirm;

    /**
     * @var string
     */
    public $userContent;
    protected $_name = [
        'agentContents' => 'agentContents',
        'timestamp' => 'timestamp',
        'toolConfirm' => 'toolConfirm',
        'userContent' => 'userContent',
    ];

    public function validate()
    {
        if (\is_array($this->agentContents)) {
            Model::validateArray($this->agentContents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentContents) {
            if (\is_array($this->agentContents)) {
                $res['agentContents'] = [];
                $n1 = 0;
                foreach ($this->agentContents as $item1) {
                    $res['agentContents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        if (null !== $this->toolConfirm) {
            $res['toolConfirm'] = $this->toolConfirm;
        }

        if (null !== $this->userContent) {
            $res['userContent'] = $this->userContent;
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
        if (isset($map['agentContents'])) {
            if (!empty($map['agentContents'])) {
                $model->agentContents = [];
                $n1 = 0;
                foreach ($map['agentContents'] as $item1) {
                    $model->agentContents[$n1] = agentContents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        if (isset($map['toolConfirm'])) {
            $model->toolConfirm = $map['toolConfirm'];
        }

        if (isset($map['userContent'])) {
            $model->userContent = $map['userContent'];
        }

        return $model;
    }
}
