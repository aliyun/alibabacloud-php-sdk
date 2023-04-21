<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFotaPendingDesktopsResponseBody\fotaPendingDesktops;
use AlibabaCloud\Tea\Model;

class DescribeFotaPendingDesktopsResponseBody extends Model
{
    /**
     * @description Details about the cloud desktops whose images have not been updated. The cloud desktops can be updated to the image of a specific version that is described in an image update task (TaskUid).
     *
     * @var fotaPendingDesktops[]
     */
    public $fotaPendingDesktops;

    /**
     * @description The token that is used to start the next query. If the value of this parameter is empty, all results are returned.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fotaPendingDesktops' => 'FotaPendingDesktops',
        'nextToken'           => 'NextToken',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fotaPendingDesktops) {
            $res['FotaPendingDesktops'] = [];
            if (null !== $this->fotaPendingDesktops && \is_array($this->fotaPendingDesktops)) {
                $n = 0;
                foreach ($this->fotaPendingDesktops as $item) {
                    $res['FotaPendingDesktops'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFotaPendingDesktopsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FotaPendingDesktops'])) {
            if (!empty($map['FotaPendingDesktops'])) {
                $model->fotaPendingDesktops = [];
                $n                          = 0;
                foreach ($map['FotaPendingDesktops'] as $item) {
                    $model->fotaPendingDesktops[$n++] = null !== $item ? fotaPendingDesktops::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
