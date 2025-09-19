<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteCheckPolicyResponseBody\policys;

class DeleteCheckPolicyResponseBody extends Model
{
    /**
     * @var policys[]
     */
    public $policys;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policys' => 'Policys',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->policys)) {
            Model::validateArray($this->policys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policys) {
            if (\is_array($this->policys)) {
                $res['Policys'] = [];
                $n1 = 0;
                foreach ($this->policys as $item1) {
                    $res['Policys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Policys'])) {
            if (!empty($map['Policys'])) {
                $model->policys = [];
                $n1 = 0;
                foreach ($map['Policys'] as $item1) {
                    $model->policys[$n1] = policys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
