<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListResponseBody\mediaList\media;

use AlibabaCloud\Dara\Model;

class runIdList extends Model
{
    /**
     * @var string[]
     */
    public $runId;
    protected $_name = [
        'runId' => 'RunId',
    ];

    public function validate()
    {
        if (\is_array($this->runId)) {
            Model::validateArray($this->runId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->runId) {
            if (\is_array($this->runId)) {
                $res['RunId'] = [];
                $n1 = 0;
                foreach ($this->runId as $item1) {
                    $res['RunId'][$n1] = $item1;
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
        if (isset($map['RunId'])) {
            if (!empty($map['RunId'])) {
                $model->runId = [];
                $n1 = 0;
                foreach ($map['RunId'] as $item1) {
                    $model->runId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
