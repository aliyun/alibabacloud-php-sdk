<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertContactGroupResponseBody\contactGroups;

class SearchAlertContactGroupResponseBody extends Model
{
    /**
     * @var contactGroups[]
     */
    public $contactGroups;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'contactGroups' => 'ContactGroups',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->contactGroups)) {
            Model::validateArray($this->contactGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactGroups) {
            if (\is_array($this->contactGroups)) {
                $res['ContactGroups'] = [];
                $n1 = 0;
                foreach ($this->contactGroups as $item1) {
                    $res['ContactGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ContactGroups'])) {
            if (!empty($map['ContactGroups'])) {
                $model->contactGroups = [];
                $n1 = 0;
                foreach ($map['ContactGroups'] as $item1) {
                    $model->contactGroups[$n1] = contactGroups::fromMap($item1);
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
