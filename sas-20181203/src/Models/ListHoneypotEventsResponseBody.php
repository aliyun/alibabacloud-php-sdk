<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotEventsResponseBody\honeypotEvents;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotEventsResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class ListHoneypotEventsResponseBody extends Model
{
    /**
     * @description The intrusion events.
     *
     * @var honeypotEvents[]
     */
    public $honeypotEvents;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The request ID.
     *
     * @example FBD28009-6096-5E90-BFE6-62CCD67*****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'honeypotEvents' => 'HoneypotEvents',
        'pageInfo'       => 'PageInfo',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->honeypotEvents) {
            $res['HoneypotEvents'] = [];
            if (null !== $this->honeypotEvents && \is_array($this->honeypotEvents)) {
                $n = 0;
                foreach ($this->honeypotEvents as $item) {
                    $res['HoneypotEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHoneypotEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HoneypotEvents'])) {
            if (!empty($map['HoneypotEvents'])) {
                $model->honeypotEvents = [];
                $n                     = 0;
                foreach ($map['HoneypotEvents'] as $item) {
                    $model->honeypotEvents[$n++] = null !== $item ? honeypotEvents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
