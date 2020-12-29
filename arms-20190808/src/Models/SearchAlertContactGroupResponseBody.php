<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertContactGroupResponseBody\contactGroups;
use AlibabaCloud\Tea\Model;

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
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = [];
            if (null !== $this->contactGroups && \is_array($this->contactGroups)) {
                $n = 0;
                foreach ($this->contactGroups as $item) {
                    $res['ContactGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchAlertContactGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroups'])) {
            if (!empty($map['ContactGroups'])) {
                $model->contactGroups = [];
                $n                    = 0;
                foreach ($map['ContactGroups'] as $item) {
                    $model->contactGroups[$n++] = null !== $item ? contactGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
