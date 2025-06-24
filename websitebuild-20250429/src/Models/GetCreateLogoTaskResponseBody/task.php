<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetCreateLogoTaskResponseBody;

use AlibabaCloud\Dara\Model;

class task extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string[]
     */
    public $urls;
    protected $_name = [
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
        'urls' => 'Urls',
    ];

    public function validate()
    {
        if (\is_array($this->urls)) {
            Model::validateArray($this->urls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->urls) {
            if (\is_array($this->urls)) {
                $res['Urls'] = [];
                $n1 = 0;
                foreach ($this->urls as $item1) {
                    $res['Urls'][$n1] = $item1;
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['Urls'])) {
            if (!empty($map['Urls'])) {
                $model->urls = [];
                $n1 = 0;
                foreach ($map['Urls'] as $item1) {
                    $model->urls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
