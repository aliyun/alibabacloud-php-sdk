<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20260603\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAIModelGallery\V20260603\Models\GetModelDeploymentResourcesResponseBody\memberMatches;

class GetModelDeploymentResourcesResponseBody extends Model
{
    /**
     * @var memberMatches[]
     */
    public $memberMatches;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'memberMatches' => 'MemberMatches',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->memberMatches)) {
            Model::validateArray($this->memberMatches);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memberMatches) {
            if (\is_array($this->memberMatches)) {
                $res['MemberMatches'] = [];
                $n1 = 0;
                foreach ($this->memberMatches as $item1) {
                    $res['MemberMatches'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MemberMatches'])) {
            if (!empty($map['MemberMatches'])) {
                $model->memberMatches = [];
                $n1 = 0;
                foreach ($map['MemberMatches'] as $item1) {
                    $model->memberMatches[$n1] = memberMatches::fromMap($item1);
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
