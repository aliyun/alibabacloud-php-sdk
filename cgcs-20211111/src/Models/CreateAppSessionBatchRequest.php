<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchRequest\appInfos;
use AlibabaCloud\Tea\Model;

class CreateAppSessionBatchRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var appInfos[]
     */
    public $appInfos;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $customTaskId;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'appInfos'     => 'AppInfos',
        'customTaskId' => 'CustomTaskId',
        'timeout'      => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInfos) {
            $res['AppInfos'] = [];
            if (null !== $this->appInfos && \is_array($this->appInfos)) {
                $n = 0;
                foreach ($this->appInfos as $item) {
                    $res['AppInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->customTaskId) {
            $res['CustomTaskId'] = $this->customTaskId;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppSessionBatchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInfos'])) {
            if (!empty($map['AppInfos'])) {
                $model->appInfos = [];
                $n               = 0;
                foreach ($map['AppInfos'] as $item) {
                    $model->appInfos[$n++] = null !== $item ? appInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CustomTaskId'])) {
            $model->customTaskId = $map['CustomTaskId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
