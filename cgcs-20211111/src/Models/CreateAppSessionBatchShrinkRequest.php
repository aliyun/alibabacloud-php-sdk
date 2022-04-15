<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class CreateAppSessionBatchShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appInfosShrink;

    /**
     * @var string
     */
    public $customTaskId;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'appInfosShrink' => 'AppInfos',
        'customTaskId'   => 'CustomTaskId',
        'timeout'        => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInfosShrink) {
            $res['AppInfos'] = $this->appInfosShrink;
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
     * @return CreateAppSessionBatchShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInfos'])) {
            $model->appInfosShrink = $map['AppInfos'];
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
