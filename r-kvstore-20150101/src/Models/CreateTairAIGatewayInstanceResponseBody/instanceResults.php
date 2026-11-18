<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateTairAIGatewayInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateTairAIGatewayInstanceResponseBody\instanceResults\instanceResults;

class instanceResults extends Model
{
    /**
     * @var instanceResults[]
     */
    public $instanceResults;
    protected $_name = [
        'instanceResults' => 'instanceResults',
    ];

    public function validate()
    {
        if (\is_array($this->instanceResults)) {
            Model::validateArray($this->instanceResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceResults) {
            if (\is_array($this->instanceResults)) {
                $res['instanceResults'] = [];
                $n1 = 0;
                foreach ($this->instanceResults as $item1) {
                    $res['instanceResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['instanceResults'])) {
            if (!empty($map['instanceResults'])) {
                $model->instanceResults = [];
                $n1 = 0;
                foreach ($map['instanceResults'] as $item1) {
                    $model->instanceResults[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
