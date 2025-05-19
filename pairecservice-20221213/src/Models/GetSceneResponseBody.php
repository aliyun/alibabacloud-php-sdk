<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetSceneResponseBody\flows;

class GetSceneResponseBody extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var flows[]
     */
    public $flows;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'description' => 'Description',
        'flows' => 'Flows',
        'name' => 'Name',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->flows)) {
            Model::validateArray($this->flows);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->flows) {
            if (\is_array($this->flows)) {
                $res['Flows'] = [];
                $n1 = 0;
                foreach ($this->flows as $item1) {
                    $res['Flows'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Flows'])) {
            if (!empty($map['Flows'])) {
                $model->flows = [];
                $n1 = 0;
                foreach ($map['Flows'] as $item1) {
                    $model->flows[$n1++] = flows::fromMap($item1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
