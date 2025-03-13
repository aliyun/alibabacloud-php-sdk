<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class StopAndroidInstanceRequest extends Model
{
    /**
     * @description The IDs of the cloud phone instances.
     *
     * @var string[]
     */
    public $androidInstanceIds;

    /**
     * @description Specifies whether to enforce a stop operation. If a cloud phone instance fails to stop due to system or network issues, a forced stop can be triggered, though it may result in data loss.
     *
     * @example false
     *
     * @var bool
     */
    public $forceStop;
    protected $_name = [
        'androidInstanceIds' => 'AndroidInstanceIds',
        'forceStop'          => 'ForceStop',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceIds) {
            $res['AndroidInstanceIds'] = $this->androidInstanceIds;
        }
        if (null !== $this->forceStop) {
            $res['ForceStop'] = $this->forceStop;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopAndroidInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceIds'])) {
            if (!empty($map['AndroidInstanceIds'])) {
                $model->androidInstanceIds = $map['AndroidInstanceIds'];
            }
        }
        if (isset($map['ForceStop'])) {
            $model->forceStop = $map['ForceStop'];
        }

        return $model;
    }
}
